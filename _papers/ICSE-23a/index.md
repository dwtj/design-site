---
key: ICSE-23a
permalink: /papers/ICSE-23a/
short_name: ICSE '23
title: "Fairify: Fairness Verification of Neural Networks"
bib: |
  @inproceedings{biswas23fairify,
    author = {Sumon Biswas and Hridesh Rajan},
    title = {Fairify: Fairness Verification of Neural Networks},
    booktitle = {ICSE'23: The 45th International Conference on Software Engineering},
    location = {Melbourne, Australia},
    month = {May 14-May 20},
    year = {2023},
    entrysubtype = {conference},
    abstract = {
      Fairness of machine learning (ML) software has become a major concern in the recent past. Although recent research on testing and improving fairness have demonstrated impact on real-world software, providing fairness guarantee in practice is still lacking. Certification of ML models is challenging because of the complex decision-making process of the models. In this paper, we proposed Fairify, an SMT-based approach to verify individual fairness property in neural network (NN) models. Individual fairness ensures that any two similar individuals get similar treatment irrespective of their protected attributes e.g., race, sex, age. Verifying this fairness property is hard because of the global checking and non-linear computation nodes in NN. We proposed sound approach to make individual fairness verification tractable for the developers. The key idea is that many neurons in the NN always remain inactive when a smaller part of the input domain is considered. So, Fairify leverages whitebox access to the models in production and then apply formal analysis based pruning. Our approach adopts input partitioning and then prunes the NN for each partition to provide fairness certification or counterexample. We leveraged interval arithmetic and activation heuristic of the neurons to perform the pruning as necessary. We evaluated Fairify on 25 real-world neural networks collected from four different sources, and demonstrated the effectiveness, scalability and performance over baseline and closely related work. Fairify is also configurable based on the domain and size of the NN. Our novel formulation of the problem can answer targeted verification queries with relaxations and counterexamples, which have practical implications.
    }
  }
kind: conference
download_link: fairify.pdf
publication_year: 2023
tags:
  - boa
---