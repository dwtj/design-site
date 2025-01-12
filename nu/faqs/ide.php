<?php
	require_once("../includes/template.inc.php");

	drawHeader("FAQ: IDE Support for Nu");
?>

<p class="question"> Can I use my existing IDE? </p>
<p> Yes, you can use your existing IDE and Nu together. Typically, you
    will need to add a post-build phase to your IDE. </>

<p class="question"> How can I compile using Nu inside visual studio? </p>

<p>
Add a post build event to your Visual Studio project. This
way the Nu IL transformer will be executed from inside 
Visual Studio. It's very simple to add: <br/><br/>
<blockquote>
Step 1: Go to Projects/Properties/Common Properties/Build Events/Post Build
Event Command Line. <br/><br/>

Step 2: Add 'NU_PATH\bin\Nu.exe "$(TargetDir)\$(TargetFileName)"' in the blank 
line and you can compile your project in visual studio as usual. Here 
$(TargetDir) is a visual studio macro representing the directory in which 
your target assembly is generated and $(TargetFileName) is a visual studio 
macro that represents the name of the generated assembly. Visual studio
automatically expands these macros, replacing them with the correct strings.
Replace "NU_PATH" with the path to your Nu distribution. Note the quotes around
the target. This is required if the target path contains spaces
(for example: "user\Documents and Settings\My Documents").
<br/><br/> 
</blockquote>
Under the hood Visual Studio just adds a batch file containing the following 
code into the output directory. If you prefer or if you have already
have another post build event, you can also edit this file.
<blockquote>
@echo off<br/>
..\..\..\bin\Nu.exe originial.exe<br/>
if errorlevel 1 goto CSharpReportError<br/>
goto CSharpEnd<br/>
:CSharpReportError<br/>
echo Project error: A tool returned an error code from the build event<br/>
exit 1<br/>
:CSharpEnd<br/>
</blockquote>
</p>

<?php
	drawFooter();
?>
