---
key: ICSE-23b
permalink: /papers/ICSE-23b/
short_name: ICSE '23
title: "Decomposing a Recurrent Neural Network into Modules for Enabling Reusability and Replacement"
bib: |
  @inproceedings{imtiaz23rnn,
    author = {Sayem Mohammad Imtiaz, Fraol Batole, Astha Singh, Rangeet Pan, Breno Dantas Cruz, and Hridesh Rajan},
    title = {Decomposing a Recurrent Neural Network into Modules for Enabling Reusability and Replacement},
    booktitle = {ICSE'23: The 45th International Conference on Software Engineering},
    location = {Melbourne, Australia},
    month = {May 14-May 20},
    year = {2023},
    entrysubtype = {conference},
    abstract = {
      Can we take a recurrent neural network (RNN) trained to translate between languages and augment it to support a new natural language without retraining the model from scratch? Can we fix the faulty behavior of the RNN by replacing portions associated with the faulty behavior? Recent works on decomposing a fully connected neural network (FCNN) and convolutional neural network (CNN) into modules have shown the value of engineering deep models in this manner, which is standard in traditional SE but foreign for deep learning models. However, prior works focus on the image-based multiclass classification problems and cannot be applied to RNN due to (a) different layer structures, (b) loop structures, (c) different types of input-output architectures, and (d) usage of both nonlinear and logistic activation functions. In this work, we propose the first approach to decompose an RNN into modules. We study different types of RNNs, i.e., Vanilla, LSTM, and GRU. Further, we show how such RNN modules can be reused and replaced in various scenarios. We evaluate our approach against 5 canonical datasets (i.e., Math QA, Brown Corpus, Wiki-toxicity, Clinc OOS, and Tatoeba) and 4 model variants for each dataset. We found that decomposing a trained model has a small cost (Accuracy: -0.6%, BLEU score: +0.10%). Also, the decomposed modules can be reused and replaced without needing to retrain.
    }
  }
kind: conference
download_link: rnn.pdf
publication_year: 2023
tags:
  - boa
---