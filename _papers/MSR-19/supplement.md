---
layout: page
title: Supplementary Material - Github Python dataset for Boa
supplement: true
---

1. TOC
{:toc}

### Introduction
This page provides supplementary material for our effect substitutability study.
We used the <a href="http://boa.cs.iastate.edu">Boa infrastructure</a>, and
specifically their September 2015 GitHub dataset to complete this study.
Here we provide access to our analyses implementations coupled with the raw
results and an explanation of the output files.

This page provides supplementary material for the Github dataset for Python Data
Science (DS) projects which is published in MSR 2019. We have used
<a href="http://boa.cs.iastate.edu">Boa infrastructure</a> for this dataset.

<a href=""></a>

### Usage
The dataset can be used in two ways: using Boa website and standalone project.

#### Using Boa Website
To use the dataset go to <a href="http://boa.cs.iastate.edu">Boa website</a> and
follow the steps:

<ol>
<li>From the left menu, select User Login to login as a registered user. If you
are not registered, request for a user.</li>
<li>Write a query under the Boa Source Code. If researchers are not familiar
with the language, the example Boa programs can be utilized by clicking the
Select Examples. Some good examples for this dataset can be also found from the
<a href="https://github.com/sumonbis/MSR19-DataShowcase">Github repository</a>.</li>
<li>Select 2019 February/Python dataset in the drop-down list under Input
Dataset and run the query.</li>
</ol>

To learn about Boa language and queries, navigate through the Boa website,
especially <a href="http://boa.cs.iastate.edu/docs/index.php">Programming Guide Section</a>.

#### Standalone Project
The dataset is also available outside of Boa website. All data are stored
in Hadoop sequence files. Therefore, one can write simple programs to read those
files and get parsed AST. The raw dataset is available
<a href="">here</a> [~25 GB].

We have a written a simple program to show how one can read the sequence file
and get the parsed AST of the Python programs in the dataset:
<a href="https://github.com/sumonbis/ReadPythonDataset">Github Link</a>.

### Dataset Description
The dataset contains 1,558 Github projects with following properties:
<ol>
<li>Original (not forked) project with Python as the primary language.</li>
<li>Contains data at least one science keywords like machine-learning, deep
neural network in the description of the project. The whole list of keywords are
listed in the appendix.</li>
<li>Contains at least one usage of data science library like Pytroch, Caffe,
Keras, Tensorflow etc. A full list of used 33 Python data science libraries are
listed in the appendix.</li>
<li>Contains at least 80 star.</li>
</ol>

The dataset contains projects owned by both organizations and individual users.
Some of the top rated projects are Tensorflow Models, Keras, Scikit-learn,
Pandas, Spacy, Spotify Luigi, NVIDIA FastPhotoStyle, Theano, etc. A full list of
all the 1,558 Github projects are available
<a href="https://github.com/sumonbis/MSR19-DataShowcase/blob/master/info.txt">here</a>.
350 projects in the dataset are maintained by different organizations (Google,
Microsoft, NVIDIA etc.) and the rest 1,208 projects are maintained by individual
users. The other metrics of the dataset are:

<ul>
<li>Number of developers: 9,839</li>
<li>Number of Python files (latest snapshot): 86,321</li>
<li>Number of Python files (all revisions):4,977,680.</li>
</ul>