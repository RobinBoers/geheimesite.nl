---
title: "Σkɔnik: Syntax & Sorcery"
stylesheet: /iconic.css
layout: blank
language: en
---

<img src="https://cdn.geheimesite.nl/images/iconic/cover.svg" alt="" class="cover">

<header>
    <hgroup>
        <h1>{{ title }}</h1>
        <p>Eoin Wignand, Robin Boers en Lize Boers</p>
    </hgroup>
    <p class="left">
        2024-2025<br><br>
        Lyceum Schravenlant<br>
        <a href="//lyceumschravenlant.nl">lyceumschravenlant.nl</a><br>
        Hugo de Grootstraat 4<br>
        3119 HA&nbsp;&nbsp;Schiedam
    </p>
    <p class="right">
        Engels<br>
        Darienne Harms<br><br>
        Eoin Wignand (6A1)<br>
        Robin Boers (6A2)<br>
        Lize Boers (5H2)<br>
    </p>
    <p class="clearfix"></p>
</header>

## Introduction

Struggling with language is universal to the human condition. It seems as though we have all struggled with language at least a few times in our lives. It is a tale as old as time: you want to convey some kind information either verbally or through writing, but you either do not know the words or you just cannot get the sentence to sound right. The former may just be human error, but the latter could be fixable.

English is renowned for being a more complicated language (Oxford Royale, 2024). Complex rules and inconsistencies, like irregular verbs, the various conflicting tenses and irregular plural, make it extremely difficult for L2 learners to get a grasp on the language. Additionally, the spelling of words in the English language often seems to indicate more about their etymology rather than their pronunciation.

Inspired by similar efforts such as Esperanto (Li, 2003) and Lojban (Nicholas, 2003), we strive to create our own constructed language that is highly regular and predictable, grammatically and morphologically consistent, easy to understand, and reduces ambiguity and misunderstandings in text-based communication. Our goal for this research is to create a complete language that can be used for every day human communication on level A1 of the Common European Framework of Reference (CEF).

In doing this, we hope to learn more about language theory and gain insight into the various linguistic concepts and tradeoffs that go into forming a language.

In our first chapter, we will explore linguistics and its various subfields to gain a better understanding of language from an academic perspective. We will be looking at examples of existing constructed languages and the various decisions and tradeoffs that they have made. Finally we will be examining ways to optimize our language for efficiency of communication.

In the second chapter, we will explain the process of constructing our language, and the various steps we have taken in doing so. Moreover, it contains a full description of the morphology and syntax of our language. We have also included an extensive appendix containing a full vocabulary list, based on frequency lists from both English and Dutch respectively.

Lastly, in the third chapter we will share our findings and discuss potential next steps and further research. Additionally, for the excited reader, we will provide various resources for the construction of your own language.

We hope you have as much fun reading this as we had writing it.

(Or read the [original version](https://ftp.dupunkto.org/~axcelott/iconic-og.pdf) or see the [slides for our final presentation](https://ftp.dupunkto.org/~axcelott/iconic.pdf).)

## Chapter 1: Theoretical background

### Linguistic concepts and theories

**Phonology** and **phonetics** are studies about the sounds needed to produce spoken languages. The lines between the fields are blurry. It seems linguists have yet to reach consensus on the exact definition of the terms (Ohala, 1990). Whilst there is a lot of overlap between the fields, generally, the following distinctions can be made:

Phonetics is the study of the physical aspects of speech sounds (Cohn & Huffman, 2014), specifically the production and articulation of sounds. In phonetics, sounds are called **phones** and denoted using square brackets (Emyrs et al., 2009) in an approximate alphabet developed by the International Phonetics Association (Delahunty & Garvey, 2010).

Phonology, however, is occupied with abstract sounds as perceived by the brain (Cohn & Huffman, 2014). Here, sounds are called **phonemes** and written down in between slashes (Emyrs et al., 2009). The actual pronunciations--phones-- for a phoneme can differ based on the surrounding phonemes in a word.

For example: the /p/ phoneme can be both [p] (in "spit") and [pʰ] (in "pit"), where the latter is pronounced with a little extra puff of air called aspiration (Emyrs, 2009). Phonological rules dictate how phones correspond to phonemes. Examples would be devoicing--where consonants are weakened at the end of words or following a voiceless sound--, and spirantization--where consonants shift "up" in between vowels (Emyrs et al., 2009).

For our purposes, the exact definition of these terms and differences between the subfields does not matter all that much. However, a term that is important is the **phonetic inventory** of a language. The phonetic inventory describes all possible sounds that occur in a language (Emyrs et al., 2009). Together, they form the **phonaesthetics** (sometimes referred to as sprachgefühl) of a language: the general vibe that a language conveys (Emyrs et al., 2009).

**Orthography** studies the wide variety of ways we write languages down. The smallest unit of writing (a single symbol), is called a **grapheme** (Emyrs et al., 2009). The simplest writing system is the **alphabet**, wherein every grapheme corresponds to a single phoneme (Emyrs et al., 2009).

Western alphabets are all derivatives of the Latin or Roman alphabet. A **romanisation** is therefore a mapping of phonemes to graphemes where you assign a letter from the Latin alphabet to every phoneme in the phonetic inventory of your language (Emyrs et al., 2009). This is by far the simplest way to write down any arbitrary language, and is thus often used by linguists for reasoning about languages.

Romanisations, like for example the Chinese romanisation Pinyin, can also act as a shortcut to write logographic languages down using standardized QWERTY keyboards (Emyrs et al., 2009).

However, alphabets are not the only possible writing system. Other cultures often utilize **syllabaries** or **logographs** for their writing. A syllabary is similar to an alphabet, but in a syllabary a grapheme corresponds to an entire syllable, rather than a single phoneme (Encyclopedia Britannica, 1998). A prominent language using a syllabary for its orthography is Japanese. Logographic writing goes even further: a single grapheme corresponds to a whole word or grammatical construction. Examples would include Korean and Chinese.

**Morphology** is the study of words: how they are formed from syllables and how they can be combined to form other words (Emyrs et al., 2009).

The **lexicon** or **vocabulary** is composed of all words that appear in a language (Don et al., 2023). Words can be divided into two categories. **Content words** include nouns, verbs, adjectives, and adverbs, and they typically refer to things, actions, qualities, and concepts. This category is open-class: it is easily extendable with new words (Don et al., 2023). **Function words**, on the other hand, is a closed-class category of words which includes prepositions, conjunctions, articles, pronouns, and auxiliary verbs. They serve a grammatical function, rather than carrying semantic or lexical meaning (Don et al., 2023). In a way, the function words act as grammatical glue to bind the content words together. Thus, it is a lot harder to introduce function words than it is to introduce new content words, which is why function words are virtually never loan words (Don et al., 2023).

Content words can be further divided into categories:

A **homonym** refers to a word that has multiple, distinct meanings.
<span class="dfn">(bark, from trees; bark, the sound a dog makes)</span>

A **synonym** refers to distinct words with a shared meaning; the reverse of a homonym.
<span class="dfn">(small, little, tiny as a specifiers of size)</span>

An **antonym** refers to two words with obverse meanings.
<span class="dfn">(light--dark, up--down, hot--cold)</span>

A **hyponym** refers to a word which is a subcategory of another word.
<span class="dfn">(chair is hyponymic with furniture; vodka is hyponymic with beverage)</span>

A **hypernym** refers to a word that is a supercategory of another word; the reverse of a hyponym.
<span class="dfn">(furniture is hypernymic with chair; beverage is hypernymic with vodka)</span>

In morphology, words are called **lexemes**, which are composed of **morphemes** (Don et. al, 2023). According to Don et al. (2023), morphemes are the "smallest identifiable meaningful units" (p. 182) of language. Words are formed by varying linguistic processes; mainly derivation and inflection.

**Derivation** extends the vocabulary of a language by deriving new content words from existing ones, often using affixes (Don et al., 2023). For example:

<table class="example">
<tr><td>Happy</td><td>Bake</td></tr>
<tr><td>Unhappy</td><td>Bakery</td></tr>
<tr><td>Happiness</td><td>Baker</td></tr>
</table>

**Inflection**, on the other hand, changes the structure of a word to fit a grammatical construction (Don et al., 2023). For example, here are some inflections of the word "to eat":

> I *eat*, he *eats*, we are *eating*, they have *eaten*.

Generally speaking, derivation creates novel words, while inflection changes the shape of existing words. Inflection is required to make sentences grammatically correct, but adds little meaning. Furthermore, derivation may change the categories of words (noun -> verb -> adjective etc.), but inflection cannot (Belfakir, 2020).

Moreover, inflection is typically also more semantically consistent than derivation is, as illustrated by Belfakir (2020):

1. cars 'more than one car'  
   tables 'more than one table'  
   shoes 'more than one shoe'

2. computerize 'put into a computer' → 'put into X'  
   modernize 'make (more) modern' → 'make more X'  
   brotherize 'provide with a brother' → 'provide with X'

Another way of forming words is **compounding**, where two or more existing words are stitched together to form a new word. This differs from derivation, because "[c]ompounding consists of the combination of two or more lexemes, whereas derivation is characterized by the addition of an affix, that is, a bound morpheme, to a lexeme" (Booij, 2005, p. 1). A compound word consists of a nucleus and an adjunct (Don et al., 2023). The nucleus determines the thing being named, which is also the part of the compound that gets pluralised. The adjunct further specifies the nucleus, in a way behaving similarly to an adjective (Don et al., 2023).

<table class="example">
<tr><td>fietstour -- fietstouren</td><td>tourfiets -- tourfietsen</td></tr>
<tr><td>kabeltv -- kabeltv's</td><td>tv-kabel -- tv-kabels</td></tr>
</table>

English has three types of compounds: open (living room, high school), hyphenated (well-being, mind-blowing), and closed (bedroom, highway, cheesecake). In other languages, such as German and Dutch, this distinction is not made (Don et al., 2023).

Typically, compounds are hyponymic with their nucleuses (Bauer, 2008): *bedroom* is a subcategory of *room*. However, sometimes the nucleus of the compound is unrelated to the meaning of the compound itself. These kinds of compounds are called exocentric, opposed to endocentric (Don et al., 2023). Examples from English would include cutthroat, pickpocket, breakfast, and scarecrow.

There's two distinct types of plural:

**Additive plural** indicates that there is more than one of something. It is characterized by its referential homogeneity, that is, every member of the group 'dogs' is of type 'dog' (Overstreet & Yule, 2023). Essentially all Western-European languages feature additive (or 'regular') plural.

**Associative plural**, on the other hand, refers to (human) groups featuring referential heterogeneity; every member of the group is a unique individual. In addition, these individuals are all in some way related to each other, or a prominent member of the group (Overstreet & Yule, 2023). Hence, '*associative*' plural. Constructions like these have been reported to be widespread in the languages of Africa, Asia, Australia, and the Pacific (Daniel & Moravcsik, 2013).

Based on their morphology, we can categorize languages into three distinct categories:

**Isolating** languages make little use of inflection and instead utilize supplemental words and context to convey meaning (Don et al., 2023). Their ratio of morphemes to words is often fairly low, meaning most words consist of no more than one or two morphemes. In extreme cases, there is no distinction between words and morphemes: each word is also a morpheme and vice versa.

**Agglutinating** languages are more morphologically complex, and make heavy use of affixes to construct long, complex and very specific words (Don et al., 2023). In agglutinative languages, words are formed by stringing together morphemes in a linear sequence. Each added affix has a distinct grammatical function that contributes to the meaning of the word (Don et al., 2023).

As an example, take the English curiosity of 'antidisestablishmentarianism', which consists of seven morphemes (anti- dis- establish -ment -ari -an -ism), all attributing to the meaning. In English, words like these are rare. However, in agglutinative languages such as Turkish they are very common.

**Fusional** languages are similar to agglutinating languages (in their morphological complexity), but where agglutinated words are "assembled" of distinct, easily recognisable affixes, morphemes in fusional languages fuse in a way that changes their forms (Don et al., 2023). You can think of agglutinative languages as LEGO, and fusional languages as clay.

The meaning of words can differ based on the social-cultural setting. The **denotation** says what the word objectively means or represents—the dictionary definition (Don et al., 2023). The **connotation** of the word, however, is the "emotional value, stylistic value, or culturally-defined associations evoked by the word" (Don et al., 2023), and changes over space, time and generations.

**Syntax** is the linguistic subfield concerned with the construction of sentences out of smaller parts (Don et al., 2023), namely phrases and (subordinate) clauses. A **phrase**, like a compound, consists of a nucleus and an adjunct, where the adjunct further specifies the nucleus. The nucleus can be identified by the fact that the phrase would be ungrammatical without it, while the adjunct can be left out without issues.

> 'very nice people'

In the phrase above, *people* is the nucleus and *very nice* the adjunct. Phrases can be nested; in the previous example, the adjunct itself is a phrase as well, where nice is the nucleus and very the adjunct ('nice people' is grammatical but 'very people' is not).

A **predicate** is a phrase that says something ('predicates') about the subject of the sentence. In the following example, the cat is the subject, and is at home the predicate.

> 'the cat is at home'

The predicate cannot exist without the subject; thus, some phrases have a dependency on other phrases, called **arguments**. The amount of arguments they depend on is called their **valency**. For example, 'to give' calls for two arguments:

<table class="example">
<tr><td>'Bob gives a book'</td></tr>
<tr><td>'Bob gives'</td><td>(ungrammatical-- what does Bob give?)</td></tr>
<tr><td>'Gives a book'</td><td>(ungrammatical-- who gives a book?)</td></tr>
</table>

Some predicates are **avalent**: they do not require the presence of a subject or other arguments (Don et al., 2023). However, in languages such as English and Dutch, a subject is still required to make the sentence grammatical (Don et al., 2023):

<table class="example">
<tr><td>'het regent'</td><td>'it rains'</td></tr>
<tr><td>'het is half zeven'</td><td>'it is six thirty'</td></tr>
</table>

In these cases, the subject is not a real agent, but rather a sort of placeholder, typically third person singular (Don et al., 2023). This is apparent by the fact that the sentence becomes ungrammatical if rewritten with a different subject (Don et al., 2023):

<table class="example">
<tr><td>'Robin regent'</td><td>'Eoin rains'</td></tr>
<tr><td>'Lize is half zeven'</td><td>'Coco is half past six'</td></tr>
</table>

Phrases that are not required by the predicate are called **adjuncts** (Don et al., 2023). In the following example, to *Alice* functions as the adjunct:

> 'Bob gives a book to Alice'

Sometimes, a sentence is **self-reflective**. An example would be: 'the man washes himself'. The predicate 'to wash' is bivalent, but in the example there is just a single participant; *the man* both executes and undergoes the action. In these cases, a reflective pronoun ('himself') is used.

The predicate and its arguments describe the essence of a sentence, while adjuncts further specify or describe the situation. Within sentences, phrases can take on a variety of **semantic roles** (Mora Gutiérrez, 2001):

**Agent**: the 'doer' of the action denoted by the predicate.  
**Patient**: the 'undergoer' of the action or event denoted by the predicate.  
**Benefactive**: the entity that benefits from the action or event denoted by the predicate.  
**Instrument**: the medium by which the action or event denoted by the predicate is carried out.  
**Locative**: the place where the action or event denoted by the predicate is situated.

The valency of the predicate determines how many of the semantic roles are required to be fulfilled in order to make the sentence grammatical. The sentence below illustrates all of the semantic roles above:

<blockquote class="roles">
<p><span class="agent">The artist</span> painted <span class="patient">a beautiful landscape</span> for <span class="benefactive">the community</span> with <span class="instrument">spray paint</span> on <span class="locative">the brick wall</span>.</p>
</blockquote>

In the example, 'to paint' has a valency of two, so only *the artist* and *a beautiful landscape* are strictly necessary in order for the sentence to be grammatical.

Consider the following two sentences:

> Hannibal Lecter murdered two detectives.  
> Two detectives were murdered by Hannibal Lecter.

Semantically, the sentences are equivalent. In both sentences, *Hannibal Lecter* is the agent, and *two detectives* the patient. However, the **grammatical roles** fulfilled by the phrases differ. The grammatical roles mainly decide the perspective the situation is described from (Don et al., 2023). In the first sentence *Hannibal Lecter* is the subject, whilst in the second sentence *two detectives* is.

For active sentences, the semantic roles map to grammatical roles roughly like this (Don et al., 2023):

> Agent -> Subject  
> Predicate -> Verb  
> Patient -> Object  
> Benefactive -> Indirect object

The order in which grammatical roles appear is called the **word order**. Both Dutch as well as English require subject-verb-object (SVO) for declarative sentences. However, other languages may require a different word order (Don et al., 2023):

<figure>
  <img src="https://cdn.geheimesite.nl/images/iconic/word-order.png" alt="">
  <figcaption>Figure 1: The average distribution of common word orders according to Don et al. (2023).</figcaption>
</figure>

Furthermore, languages may have an **unfixed** word order, meaning the language does not prescribe a specific word order; all combinations of subject-verb-object are considered grammatical. An example would be Finnish, which has a semi-unfixed word order.

In many languages, including English and Dutch, the word order is dependent on the sentence type:

**Declarative**: 'the cat is at home' (SVO)  
**Imperative**: 'be home, cat!' (VOS)  
**Interrogative**: 'is the cat home?' (VSO)

### Constructed languages

Most languages spoken around the world are naturalistic languages. A naturalistic language is a language that has evolved through centuries of use (Cambridge Dictionary, n.d.). Opposite to this, are languages that are purposefully built by individuals. Constructed languages, also called conlangs, can be created for real-world or fictional speakers. The practice of creating new languages is called conlanging (Schreyer, 2021).

According to Emyrs et al. (2009), constructed languages can be categorised into several groups:

- **Artlangs** are created as an artistic craft, for aesthetic fulfilment.
- **Auxlangs** are created for use in international communication, in order to create a neutral common-ground for participating parties. Most existing auxiliary languages are based on European ones. Examples would include Esperanto and Ido.
- **Engelangs**, or engineered languages, are for philosophical or linguistic research. They are based on the systematic concepts of other languages. "Often to make a 'better' language than the individual's own first language" (Schreyer, 2021, p. 328).
- **Loglangs** are logical languages, aimed at rational reasoning and reduction of ambiguity. The most prominent example is Lojban, a language in which it is impossible to create ambiguity.
- **Jokelangs** are languages made up for comedic effect. An example would be Oou, which is a language made up solely of punctuation symbols (Kisa, 2003).

**Posteriori** languages are based on an existing language while in contrast, **priori** languages are completely made from scratch. Priori languages are seen as harder to create, because it is difficult to make something completely novel without accidentally including influences of existing languages (Emyrs et al., 2009).

A **naming language**, where you only need phonology and morphology, is relatively easy to create in comparison to a more extensive language, allowing actual phrases and sentences. In a more extensive language, you need to take syntax into account, as well as a more comprehensive morphology. When you decide to create a fully speakable language, pragmatics and stylistics require more attention and you will need a larger vocabulary (Emyrs et al., 2009).

When creating a language, most conlangers decide on some kind of 'hook', to make their language unique. For example, Logban does not allow ambiguity and Kēlen does not make use of verbs. Ithkuil also has an interesting hook, as it attempts to pack as much information as possible in the smallest space (Emyrs et al., 2009).

For our research, we studied the following conlangs in order to possibly learn from their decisions and design processes. We will briefly introduce each language and summarise their features below.

**Esperanto**, the most well-known conlang, is a typical auxlang. It was constructed to be a neutral language, meant for international communication. Since it is no one's mother tongue, no one is at a disadvantage when communicating with each other (Li, 2003).

One of the design features of Esperanto is simplicity in its linguistics. It has a simple phonological system, with a highly regular stress pattern. Therefore, it has an easy pronunciation. Esperanto's spelling is completely phonetic, with one grapheme per phoneme (Li, 2003). It also has a consistent morphology, which makes it attractive for new learners, because it reduces the number of words needed to understand and produce a new text (Gledhill, 1998). Its word order is unfixed, although SVO occurs the most often (Parkvall, 2010).

Esperanto is primarily based on European languages, like Russian, French, Spanish, German and English. Like many European languages, it also has a large number of colour terms, distinguishes between 'he' and 'she', it lacks an associative plural and it has a comparative particle 'ol'. Another profoundly European feature is the use of a relative pronoun in a sentence; 'the boy who waved turned out to be Robin.' Esperanto uses 'kiu' (Parkvall, 2010).

If you are already familiar with European languages, learning Esperanto can be easier. From our own experiences, we know that while learning Esperanto you are able to recognise a considerable amount of words, which profoundly speeds up the learning process.

**Lojban** is a loglang that has been in creation for over four decades, led by The Logical Language Group. It is based on the six most spoken languages and designed to be culturally neutral.

Lojban was built to be clear of any ambiguity. It does not have any distinct, separate words that sound alike, nor does it have words that have more than one unrelated meanings (homonyms). The design of Lojban is that the function of every word is conclusively clear. Lojban is unique because it is completely free of any exceptions in spelling, word formation (morphology), grammar rules and pronunciation (Nicholas, 2003).

Lojban makes use of the Roman alphabet, only leaving out h, q and w. Furthermore, it uses the apostrophe ('), representing a sound similar to /h/, as well as the period (.), as part of the morphology, indicating pauses in the sentence, and the comma (,) to indicate a syllable break within a word. The written language correlates exactly with the spoken language, thanks to its phonetic spelling (Nicholas, 2003).

Lojbans grammar is based on the principles of logic, using a system with a relationship and arguments (Nicholas, 2003). In order to understand these grammar rules, one has to have a lot of metalinguistic knowledge, for example, you need to understand the principles of predicate logic.

The simplicity of these grammar rules make the language easier to learn for newcomers, although it does require a different approach. While the languages we are used to use verbs and nouns, Lojban does not have an exact matching concept, meaning that newcomers might have a bit of a hard time understanding what is going on.

When comparing Esperanto and Lojban, the biggest difference is the languages they are based on. While Esperanto is primarily based on European languages and features, Lojban also incorporates Chinese, Hindi and Arabic influences. Lojban's grammar features also accommodates structures from non-European languages. The vowel pairs and the power of the spoken language also corresponds more to Slavic languages. Another difference is the initial purpose. While Esperanto was specifically designed as an auxiliary language for neutral international communication, Lojban was designed instead as a linguistic tool for studying and understanding language (Nicholas, 2003).

**Toki Pona** is an engelang, literally translating to 'language good/simple' (Emyrs et al., 2009). In contrast to Lojban, Toki Pona makes heavy use of ambiguity. A multitude of words can have multiple meanings, making the language largely context based. Another aspect of this ambiguity is that it can not specify whether a word is singular or plural. Toki Pona only has fourteen letters in its alphabet and just 131 root words. Due to its minimal vocabulary, the language makes use of the combination of words. For example, 'friend' is made of the combination 'good person' ('jan pona') (Kisa, 2005).

When comparing Toki Pona and Esperanto, the main difference is the vocabulary. In Esperanto, one needs to learn a large number of words before being able to hold a conversation or read a text, while in Toki Pona, you start with only 131 root words. The vocabulary in Toki Pona is the easy part, the skill of combining these words to create others is the real challenge.

### Improving efficiency, reducing complexity

Utility of language is important to consider. According to Jaeger & Tily (2010) "language utility can be understood as relative to a human language user's communicative needs." This implies that the function a language serves must align with the user's communicative needs so that it can be properly utilised by said user. This also implies that if, for example, our constructed language does not align with our communicative needs, it will not serve a purpose to us and we will not be able to properly utilise it. Furthermore, communication succeeds when a message can be conveyed from one person to another without, or only slightly, diverging from what the first person wants to say. Usually, getting the point across takes a lot of effort from both parties. However, successful communication can be achieved with minimal effort. This is what is called communicative efficiency (Gibson et al., 2019). Communicative efficiency is part of our communicative needs and can therefore be linked to the utility of the language.

However, our need for informativeness in language seems to contradict our general preference for efficiency and its simplicity. Language has to be informative: we need to convey information as accurately as possible, but it must also be simple: conveying said information should require minimal effort. An informative language should in theory be complex and nuanced, thus completely disregarding the need for efficiency (Kemp et al., 2018).

Although, languages seem to balance both informativeness and simplicity (Gibson et al., 2019). According to Niklaus et al. (2019) there are two main ways to successfully reduce linguistic complexity while maintaining the information that needs to be conveyed: lexical simplification and syntactic simplification.

**Lexical simplification** refers to the substitution of difficult words or phrases with words that are easier to comprehend but retain the information (Niklaus et al., 2019).

According to Jaeger et al. (2010), it has been observed that words that are more predictable due to the preceding context add less information to sentences. They claim that our need for communicative efficiency makes us pronounce those predictable words with less duration than the information-holding unpredictable words.

Furthermore, predictable words are not only pronounced with shorter duration, they also do not get enunciated properly. The words that contain information are the words that get pronounced properly and with longer duration (Jaeger & Tily, 2010).

**Syntactic simplification** is the process "of reducing the grammatical complexity of a text, while retaining its information content and meaning" (Siddharthan, 2004).

According to Niklaus et al. (2019), a specific kind of syntactic simplification is sentence splitting, which takes a sentence and divides it into several shorter and simpler sentences that then become easier to process. They observed that it does make information easier to understand, but on the other hand the sequences of shorter sentences lose the cohesion and longer texts become harder to interpret. This can be remedied by linking sentences with cue words (Niklaus et al., 2019).

Another way they remedied this problem is by distinguishing core information from contextual information (Niklaus et al., 2019). This way we can use ambiguity to our advantage. By leaving out information that is given in context, we can speak more efficiently (Gibson et al., 2019).

Another thing to note for syntactic simplicity is dependency syntax and dependency locality. Dependency syntax is defined as the order individual words must have in order to derive the meaning of the sentence they are in. Dependency locality is the idea that the distance between the words that are linked by dependency should be as short as possible, as minimising dependency length increases communicative efficiency (Gibson et al., 2019).

### Common European Framework of Reference

The CEF is a document published by the Council of Europe, which aims to accurately describe "the linguistic means needed to communicate efficiently with speakers in another language" (Goullier, 2007), by quantising language proficiency on a common scale of levels, providing common terminology across languages and educational contexts, and introducing "a common methodology for analysing and describing situations" (Goullier, 2007).

The document is not prescriptive in nature, but rather intended as a tool for describing linguistic competence (Goullier, 2007). The six levels of proficiency, as defined by the CEF, are (Council of Europe, 2020):

<figure>
  <img src="https://cdn.geheimesite.nl/images/iconic/cef.png" alt="">
  <figcaption>Figure 2: the scale of skill levels defined by the CEF (Council of Europe, 2020).</figcaption>
</figure>

In this research, we will use these levels as a guideline for the complexity of the grammar and richness of the vocabulary when creating our language. We will focus on levels A1 and A2 specifically, which are defined as follows (Council of Europe, 2020):

<table class="tabular">
  <tr><td>A1</td><td>Can understand and use familiar everyday expressions and very basic phrases aimed at the satisfaction of needs of a concrete type. Can introduce him/herself and others and can ask and answer questions about personal details such as where he/she lives, people he/she knows and things he/she has. Can interact in a simple way provided the other person talks slowly and clearly and is prepared to help.</td></tr>
  <tr><td>A2</td><td>Can understand sentences and frequently used expressions related to areas of most immediate relevance (e.g. very basic personal and family information, shopping, local geography, employment). Can communicate in simple and routine tasks requiring a simple and direct exchange of information on familiar and routine matters. Can describe in simple terms aspects of his/her background, immediate environment and matters in areas of immediate need.</td></tr>
</table>

Additionally, the CEF includes a list of illustrative descriptors in the form of 'Can Do' statements for each level (Council of Europe, 2020). Since this paper fundamentally focuses on simplification of vocabulary and grammar, we are most interested in the 'reading' and 'writing' categories, which are defined as follows (Council of Europe, 2020):

<table class="tabular">
    <thead>
        <tr><th></th><th>Reading</th><th>Writing</th></tr>
    </thead>
    <tbody>
        <tr>
            <td>A1</td>
            <td>I can understand familiar names, words and very simple sentences, for example on notices and posts or in catalogues.</td>
            <td>I can write a short, simple postcard, for example sending holiday greetings. I can fill in forms with personal details, for example entering my name, nationality and address on a hotel registration form.</td>
        </tr>
        <tr>
            <td>A2</td>
            <td>I can read very short, simple texts. I can find specific, predictable information in simple everyday material such as advertisements, prospectuses, menus and timetables and I can understand short simple personal letters.</td>
            <td>I can write short, simple notes and messages relating to matters in areas of immediate need. I can write a very simple personal letter, for example thanking someone for something.</td>
        </tr>
    </tbody>
</table>

## Chapter 2: Methodology & Results

### The goals of the language

Our main goal is making a language that is complete, consistent, and lowers the bar to effective and successful communication. Furthermore, we want to enrich the orthography of our language in order to convey information typically exclusively communicated via speech, thus preventing miscommunications via text.

### The scope of the language

Before starting on the process of actually constructing our language, we need to decide how extensive and complete we want the language to be. As an example, a naming language is far less complex than a more advanced language meant for full human communication (Emyrs et al., 2009).

We want our language to be complete enough to write stories in and have moderately complicated conversations. This means we need to create a comprehensive morphology and complete syntax and grammar, rather than constructing only the phonology and orthography.

At the bare minimum, we want to enable communication on level A1 of the Common European Framework of Reference for Language skills (CEF).

### Target audience

To gain a better understanding of what others generally find difficult or lacking in their own language, we decided to make a survey. This survey consists of questions concerning what people may find difficult in the languages they are currently trying to learn, what they may be missing in their native language(s), and what they like in their native language(s). We are using Google Forms to create this survey and we have sent it via email to (most of) our school.

### Program of requirements

**The problem** we are trying to solve with this design is the irregularity and inconsistency of natural languages, which seem to be more exception than rule. We aim to create a language that is complete and consistent, thus being easier to learn and understand.

**Our audience** consists of people in the range of 11-40 years old, looking to learn a new language. As noted, we sent out a survey to research what the background of our audience is. From the results of that survey (see Appendix 3), we have concluded that our target audience is primarily Dutch-English bilingual.

**Constraints** are the limited amount of time and resources we have available during this school year.  
**Existing solutions** would include Esperanto and Lojban, as discussed in the previous chapter.

The heavy use of ambiguity in Toki Pona is interesting, but not something we would like to adopt. The complete removal of ambiguity Lojban has accomplished is equally interesting, but a computer-like grammar is not something we aim for either. Esperanto, on the other hand, is quite similar in scope and design philosophy to our language. Furthermore, since Esperanto is primarily based on languages we speak, there might be significant overlap between Esperanto and our language as well.

**Actors and stakeholders** in the design process would be us as language designers, people learning the language, and people who might be interested in teaching the language.

#### Requirements

- Phonetic: a single phoneme corresponds to a single grapheme and vice versa.
- No irregular verbs, and a single way to conjugate all verbs.
- Likewise, a single way to pluralise all words.
- And a single way to compound all words.
- Only two articles (definite and indefinite).
- Semantically consistent morphology and word derivation.  
  We want a single affix per meaning and a single meaning for each affix.
- Avoid homonyms as much as possible.  
  If a word can mean multiple things, it should be multiple words.
- Make words as short as possible, with a guideline of 2-3 syllables for 'core' words, and 5-7 syllables for derived words (such as compounds).
- No gendered words or pronouns.
- No cases, and reuse existing words where possible.

### The phonetic inventory of the language

The first step in creating our language was pinning the phonology down. In this stage, we tried to answer the questions:

- What sounds will our language include?
- What will the *sprachgefuhl* be like?

We based our phonology on those of English, with some influences from Dutch, as those are the languages we speak and thus are most familiar with. Most of the decisions we made in this phase were either improvements for pronunciation and general 'speakability' of the language, as well as personal stylistic choices.

Stylistic choices:

- We do not like the vibration of [z] and [w]
- We scrapped the 'sharp' [β] from Dutch; only kept the 'round' [ʋ] from English.
- We scrapped the [ʐ] from 'gara**g**e' and the [χ] from '**g**rote teen'; only kept the [g] from '**g**ay'.

During the development of the language, we have not found a case where we have needed to utilise phonetic rules in order to ensure pronounceability, but cases may of course arise if the language were ever really spoken.

<table class="phonetics">
    <thead>
        <tr><th colspan="2">Vowels</th><th colspan="2">Consonants</th></tr>
        <tr><th>(phone)</th><th>(grapheme)</th><th>(phone)</th><th>(grapheme)</th></tr>
    </thead>
    <tbody>
        <tr><td>[æ] (cat)</td><td>æ (U)</td><td>[d] (dick)</td><td>d</td></tr>
        <tr><td>[a] (schaap)</td><td>ɑ (a)</td><td>[p] (peel)</td><td>p</td></tr>
        <tr><td>[ɑ] (car)</td><td>ʌ (V)</td><td>[m] (mouse)</td><td>m</td></tr>
        <tr><td>[ɔ] (offer)</td><td>ɔ (c)</td><td>[n] (nugget)</td><td>n</td></tr>
        <tr><td>[o] (ghost)</td><td>o</td><td>[t] (twat)</td><td>t</td></tr>
        <tr><td>[ə] (cut)</td><td>e</td><td>[ɦ] (house)</td><td>h</td></tr>
        <tr><td>[ɪ] (if)</td><td>i</td><td>[s] (sick)</td><td>s</td></tr>
        <tr><td>[i] (fantasy)</td><td>y</td><td>[ʂ] (shit)</td><td>ȿ (z)</td></tr>
        <tr><td>[e] (day)</td><td>λ (7)</td><td>[t͡ʃ] (chocolate)</td><td>x</td></tr>
        <tr><td>[ɛ] (shrek)</td><td>э (3)</td><td>[g] (gay)</td><td>g</td></tr>
        <tr><td>[aj] (bite)</td><td>Σ (Z)</td><td>[b] (boobs)</td><td>b</td></tr>
        <tr><td>[u] (poops)</td><td>θ (0)</td><td>[f] (fuck)</td><td>f</td></tr>
        <tr><td>[aʊ] (pow)</td><td>σ (q)</td><td>[v] (virgin)</td><td>v</td></tr>
        <tr><td>[y] (schuur)</td><td>u</td><td>[l] (lol)</td><td>ʟ (l)</td></tr>
        <tr><td></td><td></td><td>[ʋ] (what)</td><td>w</td></tr>
        <tr><td></td><td></td><td>[j] (you)</td><td>ɥ (j)</td></tr>
        <tr><td></td><td></td><td>[k] (can't)</td><td>k</td></tr>
        <tr><td></td><td></td><td>[ɻ] (run)</td><td>r</td></tr>
    </tbody>
</table>

### Phonotactic constraints

The way phonemes are combined in syllables largely decides the phonaesthetics of the language, because the way consonants and vowels are arranged can change the sound and perception of the language (Emyrs et al., 2009).

Our language's syllables adhere to the (C)V(C) structure. This is fairly common in (constructed) languages. The consonants are both optional, but a single vowel cannot be a syllable. Meaning, 'by', 'yb', and 'byb' are all valid syllables, but 'y' is not. We decided to keep the rules simple, and thus not allow consonant combinations like 'tr…' and '...ng', as they would unnecessarily complicate the phonotactics of the language.

### Orthography & writing systems

After pinning the phonology down, we need a way to write our language down. Questions in this stage are:

- Do we use an alphabet, syllabary, or logographic writing system?
- What symbols do we use?
- How do the symbols correspond to the phonemes from our phonetic inventory?

We want our language to be purely phonetic. That means a single grapheme for every phoneme and vice versa. We decided to base our alphabet on the Latin alphabet, for the simple reason that it is familiar and the easiest to type for our target audience (see Appendix 3). Where possible, we retained the existing letters from the English and Dutch alphabets respectively, and in many cases, they even aligned with the IPA notation as well.

Since our alphabet is phonetic, we naturally needed to extend the traditional Latin alphabet to accommodate for additional vowels (which are typically represented by a combination of graphemes rather than a single grapheme). In these cases, we grabbed letters from various existing alphabets, such as the Greek and Russian alphabets. In doing this, we purely looked at the shapes of the graphemes and what 'felt right'; we did not look at the original pronunciation in the respective languages, although that would have been a good idea in hindsight.

Another important aspect of our orthography is the fact that we do not make the distinction between upper and lower case, since we think it does not serve any semantical purpose other than 'looking nice', yet unnecessarily complicates the language. In this aspect, our orthography is similar to that of Toki Pona, which also does not distinguish between upper and lower case (in their romanisation).

In the table above, the letters in parentheses are a romanisation of our (sometimes exotic) alphabet. These are used for typing and transmitting the alphabet in standard ASCII, which can then be transformed into the proper Unicode symbols by a special piece of software, which is available [on our website](//dupunkto.org/tools/iconic). This is similar to Pinyin, a Chinese romanisation used for easily writing Chinese on iPhones (Emyrs et al., 2009).

Since our orthography requires glyphs that are not typically provided by traditional Western fonts, we might eventually look into creating our own font for rendering our language as well. For the time being, please pick a font with appropriate Unicode support, such as Inter (sans-serif) or Junicode (serif).

### Morphological category of the language

After much experimentation, we settled on a morphology that is somewhere between isolating and agglutinating. Fusional was ruled out entirely from the beginning, because, although it looks nice, it does not align with our goal of a regular, predictable language.

Our language features a decently extensive derivational system with a fair variety of affixes, which is an exemplary property of an agglutinative morphology. However, our words are short, typically only a few syllables long, and in many cases we use compounding and adjectives rather than word derivation to convey complex semantics.

### Constructing the vocabulary

English is our ancestral language, similar how many words in contemporary Euroasian languages derive from classic Latin. We decided on English as opposed to Dutch because English is the field of research this paper is applicable to. For laying the groundwork of the vocabulary, we utilized frequency lists from English and Dutch respectively.

Additionally, we made sure to include categories explicitly mentioned in the CEF. We also incorporated words people feel are missing in their own language, according to the survey (see results in Appendix 3).

In Appendix 1 we provide a complete word list with English and Dutch translations of a variety of categories consisting of the most commonly used words and phrases in both Dutch and English respectively.

#### Derivation

We are using a consistent list of derivational affixes in order to further extend the vocabulary. Suffixes are used for changing a verb into a noun, in accordance with the rules below. All other derivational affixes will be prefixes, in an attempt to limit the complexity of the language.

| noun                | suffix | in English              |
| ------------------- | ------ | ----------------------- |
| verb -> action      | -a     | -ion, -ment, -al, -ance |
| verb -> agent       | -er    | -er                     |
| verb -> patient     | -y     | -ee                     |
| verb -> benefactive | -yp    | *non-existent*          |
| verb -> past part.  | -o     | -ed                     |
| verb -> cont. part. | -ono   | -ing                    |

The following table contains prefixes that change the meaning of words, but not the word category. Consider this list to be non-exhaustive, as it might be further extended with additional derivational prefixes in later publications.

| effect          | prefix     | in English               |
| --------------- | ---------- | ------------------------ |
| negation        | ne-        | im-, in-, de-, anti-, a- |
| without         | na-        | -less                    |
| with            | an-        | -ful                     |
| state/condition | kʌd-       | -ness, -y                |
| similarity      | ko-        | -like                    |
| manner          | *no affix* | -ly, -ily                |
| moment          | a-         | *non-existent*           |
| repetition      | rλ-        | re-                      |

#### Compounds

Compounds are formed by putting multiple existing words together to form a new word. In our language, all compounds are hyphenated, and follow the structure of *adjunct-nucleus*, where the adjunct is a specifier for the nucleus. In virtually all cases, the compound is hyponymic with its nucleus.

#### Pluralisation

For pluralisation, append an -s if possible in accordance to the language's morphology, otherwise append -es instead.

#### Loan words

Loan words are not allowed in our language. Instead, we derive the word from an existing word, or create an entirely new word. The sole exception to this rule is names. We do not want to translate names, whether it be people, cities, places or products. Instead, authors should write the name down in its original language, and then italicize or underscore it.

Prefer italicization over underlining; underscoring is only allowed to accommodate for paper writing, because it "is known to reduce the readability of text significantly, as it changes the word shape and interferes with descenders, letters that drop below the line like p, q and j" (Obendorf & Weinreich, 2003).

#### Diminutives

Our language does not support forming diminutives by appending suffixes, like Dutch does. Instead, to indicate something is small, use the adjective 'ʟiʟ'. Similarly, using the adjective 'wɔp' functions as an augmentative.

### The syntax of the language

#### Word order

Our sentences follow a semi-unfixed word order. The basis of the sentence is structured according to SVO, where the subject can optionally be dropped when implied by the verb conjugation (more on that later). Any additional phrases can be placed at any point in the sentence, but must be preceded by a grammatical 'glue' word, to indicate its grammatical role.

| grammatical role | keyword |
| ---------------- | ------- |
| benefactive      | vɔr     |
| instrument       | mэt     |
| locative         | эt      |
| time             | ɔm      |
| nested sentence  | ɥy      |

The preposition 'эt' is used for generic localities, where you would usually utilize 'at' in English. If necessary, the locale can be further specified by replacing this preposition with one of the words from the 'Localities' table from Appendix 1. The same applies for the preposition 'ɔm' as well, which can optionally be replaced with the prepositions 'dΣmɑ' and 'dΣmy'.

#### Pronouns & verb conjugation

In total, our language contains three types of pronouns:

- **Subjective/objective pronouns**, as seen in the first column of the table below.
- **Possessive pronouns**, which are formed by appending -n to the respective subjectives.
- **Self-reflexive pronouns**, which are formed by appending -sэv to the respective subjectives.

Our verbs are conjugated by applying the suffix in the right most column to the end of the verb. The vowel utilized in the chosen suffix indicates the tense of the verb, where 'e' indicates the present, 'ʌ' the past, and 'ɔ' the future. To conjugate a past participle or adjective, append -o instead.

Our language is pro-drop. That means, that in sentences where the (subjective) pronoun can be inferred from the verb conjugation, it may be entirely omitted. For example, the sentence 'mu ʌrem' ('I am') may be simplified to just 'ʌrem', because the -em suffix already implies first person.

<table class="pronouns">
<tr><th>1st person</th><td>mu</td><td>-em</td></tr>
<tr><th>2nd person</th><td>dy</td><td>-es</td></tr>
<tr><th>3rd person</th><td>ʟλ</td><td>-ed</td></tr>
<tr><th>Group 1st (in)</th><td>wy</td><td>-en</td></tr>
<tr><th>Group 2nd (out)</th><td>jθ</td><td>-ek</td></tr>
<tr><th>Group 3rd</th><td>vΣ</td><td>-ev</td></tr>
<tr><td></td>
    <td><small>+n for possessive<br>+sэv for self-reflective</small></td>
    <td><small>e = present<br>ʌ = past<br>ɔ = future</small></td>
</tr>
</table>

For avalent verbs, we utilize the generic third person pronoun and suffix.

#### Indicating sentence type

All sentences are assumed to be declarative unless specified otherwise. To change the sentence type to an interrogative or imperative sentence, prepend one of the following specifiers. These are required to be the very first word of the sentence, preceding every other phrase, in order to indicate sentence type upfront, and thus prevent miscommunications.

<table>
<tr><th>interrogative</th><td>da + SENTENCE</td></tr>
<tr><th>imperative</th><td>xa + SENTENCE</td></tr>
</table>

In imperative sentences, verbs are left unconjugated. Thus, instead of appending the usual suffix, append just the phoneme indicating tense (e, ɔ, ʌ).

#### Nested sentences

In cases where sentences are nested (subordinate clauses, modal verbs etc.), we utilize the word 'ɥy,' which indicates that the following phrase will in fact be a nested sentence. A few examples:

> wisem ɥy kэned ne ɥy ʟσfed.  
> <small>(know-I) (nested sentence) (can-he) (not) (nested sentence) (walk-he)</small>  
> 'I know that he can not walk.'

<!-- Here because otherwise the stupid Markdown will join the examples together -->

> poremysed ɥy gλhed ɑsɑ.  
> <small>(promise-he) (nested sentence) (go-he) (there)</small>  
> 'He promised to go there.'

Since nested sentences can include grammatical 'glue' words, the nested sentence has to be the last phrase of the sentence, to prevent ambiguity. This has the added benefit that it makes sentences easier to understand, because it minimizes the cognitive distance, allowing the main idea to be processed first and then linearly presenting additional information, rather than having the reader jump around the sentence to understand it.

Nested sentences can also include further nested sentences, again utilizing the 'ɥy' word, given they are the last phrase of the nested clause. However, this makes for longer, more complex sentences and is therefore discouraged.

> pθved ɥy sæded ɥy ʟuved de kɔʟɔr nэna.  
> <small>(allowed-he) (nested sentence) (say-he) (nested sentence) (love-he) (the) (color) (pink)</small>  
> 'He is allowed to say that he likes the color pink.'

#### Direct vs indirect speech

For direct speech, we utilize rules similar to those from English and Dutch, placing the literal sentence in quotation marks. The writer is free to choose whatever quotation marks they prefer, but are encouraged to stay consistent within their writing.

> Robin says: "I like the color pink."  
> sæded Robin "ʟuvem de kɔʟɔr nэna."

For indirect speech, we reuse the existing grammar already present for nested sentences:

> Robin says that he likes the color pink.  
> sæded Robin ɥy ʟuved de kɔʟɔr nэna.

#### Possessives

Possessive pronouns are formed by appending -n to the respective objective pronoun, as discussed in the section 'Pronouns & verb conjugation.' However, if you want to indicate an possessive for an entire phrase, use the external genitive 'vɔn':

> OBJECT vɔn OWNER

This leaves us with two ways to indicate possession in our language:

<table class="tabular">
<thead><tr><th>Periphrastic possessive</th><th>Possessive determiner</th></tr></thead>
<tbody><tr>
    <td>de lybre vɔn de Σmy<br>'The man's book'</td>
    <td>mun lybre<br>'My book'</td>
</tr></tbody>
</table>

Constructions such as 'de lybre vɔn mu' are considered ungrammatical.

#### Adjectives

Adjectives are put after the noun they are further specifying. The order in which they appear is irrelevant, unless it affects the semantics of the word in question. For example, a 'Σmʌn ʟiʟ wɔp' means something akin to 'big dwarf,' while 'Σmʌn wɔp ʟiʟ' means 'small giant.'

#### Negations

Negations and affirmations, like 'not', '*wel*', 'often', 'never', 'always' are, in our language, seen as "adjectives" that modify the meaning of a verb, and thus follow the same rules that apply for adjectives too. They are placed right behind the verb.

#### Degrees of comparison

<table class="tabular">
<thead>
    <tr><th>English</th><th>Dutch</th><th>Our language</th></tr>
</thead>
<tbody>
    <tr><td>Good</td><td>Goed</td><td>bɔn</td></tr>
    <tr><td>Better</td><td>Beter</td><td>bɔnbɔn</td></tr>
    <tr><td>Best</td><td>Best</td><td>bɔnbɔnbɔn</td></tr>
</tbody>
</table>

This also leaves room for creative figurative speech, such as 'bɔnbɔnbɔnbɔn' ('bestest').

To use this in a sentence, we utilize the preposition 'dʌn', which literally translates to 'than'. For example:

> bɔnbɔn dʌn bɔnbɔnbɔn  
> 'better than best'

For equalities, we utilize the preposition 'eku', which translates to 'as … as …'. For example:

> wɔp eku dʌt bowɑ  
> <small>(big) (equals) (that) (building)</small>  
> 'as big as that building'

### Tone indicators

Tone indicators contextualise a sentence by indicating the (emotional under)tone of the sentence, or indicating references (such as inside jokes) or quotes. They are typically placed at the very end of the sentence.

| Tone            | Translation | Indicator |
| --------------- | ----------- | --------- |
| joking          | ɥukono      | ɥuk.      |
| sarcastic       | sʌrkʌso     | sʌr.      |
| serious/genuine | sirλus      | sir.      |
| positive        | pɔso        | pɔs.      |
| negative        | sebo        | seb.      |
| citation/quote  | sytɑto      | syt.      |
| reference       | refэro      | ref.      |

These can also be inverted by prepending them with an n-. They are used as follows:

> Oh, great, another meeting. I just *love* them *so much* [sʌr.]  
> No, seriously, we need to finish this today [nɥuk.]  
> If we do not change anything now, we have a real problem [sir.]  
> I really do appreciate your help, thank you [nsʌr.]  
> Ik heb daar geen actieve herinnering aan [ref.]  
> Misschien is hij op zoek naar een functie elders [ref.]  
> "God does not play dice" -- "Stop telling God what to do" [syt.]  
> Yeah, sure, I'm just *thrilled* to be stuck here all day [sʌr.]  
> This reminds me of that time you tried to bake cookies and nearly burned the house down [nɥuk.]

Tone indicators are exclusively used in writing, and are not meant to be pronounced explicitly (but can be used by a reader to infer intonation).

### Idea table

The following table contains a helicopter-view of the decisions we have made in the various stages of construction, all with the goal to simplify the syntax while retaining semantics.

<table class="tabular">
    <thead>
        <tr><th>Linguistic aspect</th><th colspan="3">Options</th></tr>
    </thead>
    <tbody>
        <tr><td>Orthography</td><td>Alphabet</td><td><i>Syllabary</i></td><td><i>Logographic</i></td></tr>
        <tr><td>Morphology</td><td>Isolating</td><td>Agglutinative</td><td><i>Fusional</i></td></tr>
        <tr><td>Pluralisation</td><td><i>Irregular</i></td><td>Affix ('s, -en)</td><td><i>Vowel change</i></td></tr>
        <tr><td>Word order</td><td><i>SOV</i></td><td>SVO</td><td><i>Unfixed</i></td></tr>
        <tr><td>Compounds</td><td><i>Open</i></td><td><i>Closed</i></td><td>Hyphenated</td></tr>
        <tr><td>Possessive</td><td>External genitive</td><td><i>Genetative affix ('s)</i></td><td>Determiner (adjective)</td></tr>
        <tr><td>Degr. of comparison</td><td>Reduplication</td><td><i>Affix (-er, -st)</i></td><td><i>Vowel change</i></td></tr>
    </tbody>
</table>

### Testing it

In order to test our language we have translated excerpts from various (short) stories, which can be found in Appendix 2.

Other than that, another way to test the language would be teaching it to friends or relatives. However, due to shortage of time, we decided to focus on the translations instead.

## Chapter 3: Evaluation & Discussion

Our goal was to create a complete, consistent language from scratch for spoken and written communication. If we take a look at our original design constraints from the program of requirements:

<ul style="font-size: 0.9em">
    <li>Phonetic: a single phoneme corresponds to a single grapheme and vice versa.</li>
    <li>No irregular verbs, and a single way to conjugate all verbs.</li>
    <li>Likewise, a single way to pluralise all words.</li>
    <li>And a single way to compound all words.</li>
    <li>Only two articles (definite and indefinite).</li>
    <li>Consistent morphology and word derivation.</li>
    <li>Avoid homonyms as much as possible. </li>
    <li>No gendered words or pronouns.</li>
    <li>No cases, and reuse existing words where possible.</li>
</ul>

Our grammar and morphology adheres to every single one of the requirements.

Furthermore, we specified we wanted the language to be usable for A1 level communication. As mentioned in Chapter 1, this entails "everyday expressions and very basic phrases aimed at the satisfaction of needs of a concrete type." Our vocabulary and syntax more than covers this requirement.

Therefore, we must conclude that we have created a complete, usable language. As noted in the previous chapter, Appendix 2 contains translations of excerpts from multiple (short) stories.

Overall, the process of making this language was surprisingly easy. We did lots of work upfront during the theoretical research, which made executing the language quite straightforward. Furthermore, deciding on the fundamental structure of the language was pretty simple as well, as we could make these decisions together easily. The most challenging part was creating the vocabulary, because of the sheer volume of necessary words (big!) Maintaining morphological consistency was a challenge too, as was deciding on certain syntactic structures; we insufficiently researched these topics beforehand.

We still personally struggle with the pronunciation of our own language. For that reason, we've also built a tool that can perfectly pronounce our language, which is possible because the phonology is entirely phonetic. The tool is <a href="//dupunkto.org/tools/pronounce">available on our website</a>.

As for our future plans, we noticed that our language is wonderfully concise. On average, sentences in our language are significantly shorter than their equivalents in English and Dutch respectively. This makes our language a perfect fit for quickly writing down great amounts of information, such as taking notes in class, which is something we'd like to try out. Other ideas would include creating a Duolingo-like app for learning our language, creating our own font for rendering the orthography--potentially utilizing ligatures--, creating a Google Translate-like app based on the OpenAI API, and teaching our language to other people. Additionally, further extending the vocabulary and introducing additional syntactic elements would possibly enable B1 level communication.

In conclusion, we created a fully usable language, learned a lot about linguistics & language theory, and had a lot of fun doing it.

You might, after reading all this, be wondering what the name of our language is. It is called Σkɔnik (pronounced 'iconic'), which might already have been apparent from the title of this document. It doesn't translate to anything; it does not mean anything either. It just sounds cool.

### Discussion

There's a few things we could have done differently:

- Our language is quite limited in scope, because we wanted to limit the complexity of the language and ensure that our goals would be manageable within the given time frame. Moreover, we did this to ensure that our language could keep clear of exceptions, and would thus be easier to use. A side-effect of this however, is that the language sometimes feels a little over simplistic; childish even.
- We could have been more experimental in how we write the language down. For example, we could have used runes or hieroglyphs. However, this would all have been very hard to do on the QWERTY keyboards that we're currently using.
- Moreover, as noted previously, we failed to take into account the pronunciation of graphemes in their language of origin, which would have been a good idea in hindsight.
- Using diacritics rather than exotic glyphs to populate our vowel inventory would have made the language look less 'alien' and more friendly for newcomers. On the other hand, its 'alienness' has become a rather defining feature of the orthography, which we quite like.
- We created words on the fly when we needed them, and kept extending the vocabulary list during translations and grammar discussions. If we had completely inventoried the word list beforehand, we would have been able to have taken a more systematic approach to constructing the vocabulary.
- There are a few cases in which we 'fused' words together, rather than using a more consistent morphological approach. Given the fact that our language's morphology is primarily agglutinative (and not fusional), this should have been avoided. However, we felt that pronounceability, stylistics, and ease-of-use should also be taken into account, which is why we ultimately have a handful of inconsistently derived words.
- While creating the language, and especially the syntax, we aimed for 'easy'. However, we failed to define the 'easy' we were optimising for upfront. This resulted in multiple miscommunications where some of us were optimising for 'easy to use' (when learned and automated) and others for 'easy to learn' (coming from English or Dutch).
- Our language is very Eurocentric. It borrows a lot from languages like English, Dutch, German, French, Spanish, and Italian. This means we potentially missed out on interesting ideas to further simplify the language. We could have diversified it further by incorporating elements of different language families. However, this is hard, since we do not actually speak any other languages.
- Initially, we had started the research with a particular focus on neurodivergent audiences, such as people on the autism spectrum or people with ADHD. The idea being that by optimizing for the 'lowest common denominator' (by lack of a better description), this would make the language easier for the entire audience to understand. However, during research we found that the problem is not necessarily the way that languages are structured, but rather how the language is taught to neurodivergent people that makes it hard. This is why we ultimately decided to completely scrap this research direction.
- We sent out a survey about language that we proceeded to not use (apart from the audience part). For us, this survey acted more as a confirmation for the decisions we had already made. These decisions include things like gender neutral language, easy to grasp grammar that has no exceptions, and easy to pronounce words. This information was not necessarily new or useful, but it was nice to know that others did want the same out of a language that we did.

## References

Bauer, L. (2008). Exocentric compounds. <i>Morphology, 18</i>(1), 51–74. <https://doi.org/10.1007/s11525-008-9122-5>

Belfakir, L. (2020). Morphology: Derivation vs. Inflection. <https://fldm.usmba.ac.ma/uploads/2020/03/AN423-Belfakir-Intro-2-Lx-8-Morphology-2.pdf>. ([archived](https://ftp.dupunkto.org/~axcelott/belkafir.pdf))

Booij, G. E. (2005). Compounding and derivation: Evidence for Construction Morphology. In W.U. Dressler, D. Kastovsky, O.E. Pfeiffer, F. Rainer, F. Gardani, & M.A. Pöchtrager (Eds.), <i>Morphology and its demarcations</i> (pp. 109-132). John Benjamins. <https://doi.org/10.1075/cilt.264.08boo>

Cambridge Dictionary. (n.d.). Natural language. In <i>Cambridge Dictionary</i>. Retrieved February 14, 2025, from <https://dictionary.cambridge.org/dictionary/english/natural-language>

Cohn, A., & Huffman, M. K. (2014). Interface between phonology and phonetics. <i>Oxford Bibliographies</i>. <https://doi.org/10.1093/obo/9780199772810-0168>

Council of Europe. (2020). <i>Common European Framework of Reference for Languages: Learning, teaching, assessment -- Companion volume</i>. Council of Europe Publishing. <https://coe.int/lang-cefr>

Daniel, M., & Moravcsik, E. (2013). The associative plural. In M. S. Dryer & M. Haspelmath (Eds.), <i>The world atlas of language structures</i> (pp. 150-153). Oxford University Press.

Li, D.C.S. (2003). Between English and Esperanto: what does it take to be a world language? <i>International Journal of the Sociology of Language, 2003</i>(164), 33-63. <https://doi.org/10.1515/ijsl.2003.055>

Delahunty, G. P., & Garvey, J. J. (2010). <i>The English Language: From Sound to Sense</i>. The WAC Clearinghouse; Parlor Press. <https://doi.org/10.37514/per-b.2010.2331>

Don, J., Meyer, C., & Rispens, J. (2023). <i>Taal en Taalwetenschap</i>. (3rd ed.). Wiley Blackwell. ISBN: 978-1-119-75395-7.

Emyrs, S., Fink, A., & Peterson, D. (2009). <i>Conlanging 101</i>. Language Creation Society. Retrieved September 8, 2024, from <https://conlang.org/cl101.pdf>. ([archived](https://ftp.dupunkto.org/~axcelott/cl101.pdf))

Encyclopedia Britannica. (1998, July 20). Syllabary. In <i>Encyclopedia Britannica</i>. Retrieved February 14, 2025, from <https://britannica.com/topic/syllabary>

Gibson, E., Futrell, R., Piantadosi, S. P., Dautriche, I., Mahowald, K., Bergen, L., & Levy, R. (2019). How efficiency shapes human language. <i>Trends in Cognitive Sciences, 23</i>(5), 389–407. <https://doi.org/10.1016/j.tics.2019.02.003>

Gledhill, C. (1998). <i>The Grammar of Esperanto: A Corpus-based Description</i>. Lincom Europa. <https://hal.science/hal-01220008>

Goullier, F. (2007). <i>Council of Europe tools for language teaching: Common European Framework of Reference and Portfolios</i>. Didier. <https://coe.int/en/web/common-european-framework-reference-languages/documents>

Henning, J. (1995). <i>A naming language</i>. <https://fiatlingua.org/wp-content/uploads/2016/10/fl-00003E-00.pdf>. ([archived](https://ftp.dupunkto.org/~axcelott/naming-language.pdf))

Jaeger, T. F., & Tily, H. (2010). On language 'utility': processing complexity and communicative efficiency. <i>Wiley Interdisciplinary Reviews: Cognitive Science, 2</i>(3), 323-335. <https://doi.org/10.1002/wcs.126>

Kemp, C., Xu, Y., & Regier, T. (2018). Semantic typology and efficient communication. <i>Annual Review of Linguistics, 4</i>(1), 109-128. <https://doi.org/10.1146/annurev-linguistics-011817-045406>

Kisa, S. E. (2003). <i>Oou: The insane language (or friendly genocide)</i>. Retrieved September 17, 2024, from <https://drive.google.com/file/d/1jLxGsmLDXHxxJJkB1PaAaoDvLHz-tLDY/view>. ([archived](https://ftp.dupunkto.org/~axcelott/Oou%20expanded%20vocabulary.pdf))

Kisa, S. E. (2005). <i>Toki Pona: The language of good--the simple way of life</i>. Tawhid. ISBN:  978-0978292300.

Mora Gutiérrez, J. P. (2001). Directed motion in English and Spanish. <i>Estudios de Lingüística del Español, 11</i>. ISSN: 1139-8736. <http://elies.rediris.es/elies11/cap5111.htm> ([archived](https://web.archive.org/web/20250913211429/http://elies.rediris.es/elies11/cap5111.htm))

Nicholas, N., & Cowan, J. W. (Eds.). (2003). <i>What Is Lojban?</i> Logical Language Group. <https://lojban.org/static/publications/level0/lojbanLevel0.paperback.pdf>

Niklaus, C., Cetto, M., Freitas, A., & Handschuh, S. (2019). Transforming complex sentences into a semantic hierarchy. <i>Proceedings of the 57th Annual Meeting of the Association for Computational Linguistics</i>, 3415–3427. <https://doi.org/10.18653/v1/P19-1333>

Obendorf, H., & Weinreich, H. (2003). Comparing link marker visualization techniques: changes in reading behavior. In <i>Proceedings of the 12th International Conference on World Wide Web</i> (pp. 736–-745). Association for Computing Machinery. <https://doi.org/10.1145/775152.775255>

Ohala, J. (1990). There is no interface between phonology and phonetics. <i>Journal of Phonetics, 18</i>(2), 153-171. <https://doi.org/10.1016/s0095-4470(19)30399-7>

Overstreet, M., & Yule, G. (2023). Associative plural marking in English varieties. <i>English Today, 40</i>(2), 122-126. <https://doi.org/10.1017/s0266078423000354>

Oxford Royale. (2020, September 11). <i>Why is English so hard to learn?</i> Oxford Royale Academy. <https://oxford-royale.com/articles/learning-english-hard> ([archived](https://web.archive.org/web/20250913211935/https://www.oxford-royale.com/articles/learning-english-hard))

Schreyer, C. (2021). Constructed languages. <i>Annual Review of Anthropology, 50</i>(1), 327-344. <https://doi.org/10.1146/annurev-anthro-101819-110152>

Siddharthan, A. (2006). Syntactic simplification and text cohesion. <i>Research on Language and Computation, 4</i>(1), 77-109. <https://doi.org/10.1007/s11168-006-9011-1>

## Appendix 1: Word list

### Keywords

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Hello</td>
      <td>Hallo</td>
      <td>hλ, hΣ, ɥo</td>
    </tr>
    <tr>
      <td>World</td>
      <td>Wereld</td>
      <td>ωθd</td>
    </tr>
    <tr>
      <td>Bye</td>
      <td>Doei</td>
      <td>bΣ, xσ</td>
    </tr>
    <tr>
      <td>Hello (formal)</td>
      <td>Hallo (formeel), goedendag</td>
      <td>bɔnsɔʟ</td>
    </tr>
    <tr>
      <td>Bye (formal)</td>
      <td>Doei (formeel)</td>
      <td>bɔnmэr</td>
    </tr>
    <tr>
      <td>And</td>
      <td>En</td>
      <td>эn</td>
    </tr>
    <tr>
      <td>Or</td>
      <td>Of</td>
      <td>ɔf</td>
    </tr>
    <tr>
      <td>The</td>
      <td>De, het</td>
      <td>de</td>
    </tr>
    <tr>
      <td>A/an</td>
      <td>Een</td>
      <td>en</td>
    </tr>
    <tr>
      <td>Yes</td>
      <td>Ja</td>
      <td>ɥæ</td>
    </tr>
    <tr>
      <td>-</td>
      <td>Wel</td>
      <td>ɥe</td>
    </tr>
    <tr>
      <td>No</td>
      <td>Nee</td>
      <td>no</td>
    </tr>
    <tr>
      <td>Not, none</td>
      <td>Niet, geen</td>
      <td>ne</td>
    </tr>
    <tr>
      <td>With</td>
      <td>Met</td>
      <td>ɑn</td>
    </tr>
    <tr>
      <td>Without</td>
      <td>Zonder</td>
      <td>nɑ</td>
    </tr>
    <tr>
      <td>Good</td>
      <td>Goed</td>
      <td>bɔn</td>
    </tr>
    <tr>
      <td>Bad</td>
      <td>Slecht</td>
      <td>ωɔm</td>
    </tr>
    <tr>
      <td>Life</td>
      <td>Leven</td>
      <td>vyvɑ</td>
    </tr>
    <tr>
      <td>Death</td>
      <td>Dood</td>
      <td>dod</td>
    </tr>
    <tr>
      <td>Love</td>
      <td>Liefde</td>
      <td>ʟuv</td>
    </tr>
    <tr>
      <td>Hate</td>
      <td>Haat</td>
      <td>hλt</td>
    </tr>
    <tr>
      <td>Light</td>
      <td>Licht</td>
      <td>usɔʟ</td>
    </tr>
    <tr>
      <td>Free</td>
      <td>Vrij</td>
      <td>otσ</td>
    </tr>
    <tr>
      <td>God</td>
      <td>God</td>
      <td>gɔt</td>
    </tr>
    <tr>
      <td>Devil</td>
      <td>Duivel</td>
      <td>duveʟ</td>
    </tr>
    <tr>
      <td>Thing</td>
      <td>Ding</td>
      <td>ɑfэro</td>
    </tr>
    <tr>
      <td>Human, person</td>
      <td>Mens, persoon</td>
      <td>Σmʌn</td>
    </tr>
    <tr>
      <td>Woman, girl</td>
      <td>Vrouw, meisje</td>
      <td>Σmɑ</td>
    </tr>
    <tr>
      <td>Man, boy</td>
      <td>Man, jongen</td>
      <td>Σmy</td>
    </tr>
    <tr>
      <td>Self</td>
      <td>Zelf</td>
      <td>sэv</td>
    </tr>
    <tr>
      <td>Sentience/self-awareness</td>
      <td>Zelfbewustzijn</td>
      <td>sentɑʟo</td>
    </tr>
    <tr>
      <td>Conscience</td>
      <td>Geweten</td>
      <td>bonæro</td>
    </tr>
    <tr>
      <td>Intrusive thoughts</td>
      <td>Opdringerige gedachten</td>
      <td>ωomæro</td>
    </tr>
    <tr>
      <td>Much/many</td>
      <td>Veel</td>
      <td>din</td>
    </tr>
    <tr>
      <td>Few</td>
      <td>Weinig</td>
      <td>fin</td>
    </tr>
    <tr>
      <td>More</td>
      <td>Meer</td>
      <td>dindin</td>
    </tr>
    <tr>
      <td>Less</td>
      <td>Minder</td>
      <td>finfin</td>
    </tr>
    <tr>
      <td>Everything</td>
      <td>Alles</td>
      <td>ʌʟ</td>
    </tr>
    <tr>
      <td>Nothing</td>
      <td>Niks, niets</td>
      <td>niʟ</td>
    </tr>
    <tr>
      <td>Everyone</td>
      <td>Iedereen</td>
      <td>ʌʟmʌn</td>
    </tr>
    <tr>
      <td>Nobody</td>
      <td>Niemand</td>
      <td>niʟmʌn</td>
    </tr>
    <tr>
      <td>Always, forever</td>
      <td>Altijd</td>
      <td>ʌʟdΣm</td>
    </tr>
    <tr>
      <td>Often, usually</td>
      <td>Vaak</td>
      <td>dindΣm</td>
    </tr>
    <tr>
      <td>Sometimes</td>
      <td>Soms</td>
      <td>findΣm</td>
    </tr>
    <tr>
      <td>Never</td>
      <td>Nooit</td>
      <td>niʟdΣm</td>
    </tr>
    <tr>
      <td>Exactly</td>
      <td>Precies</td>
      <td>dinɑ</td>
    </tr>
    <tr>
      <td>Almost</td>
      <td>Bijna</td>
      <td>finɑ</td>
    </tr>
    <tr>
      <td>But, however</td>
      <td>Maar</td>
      <td>ɥэt</td>
    </tr>
    <tr>
      <td>Also, furthermore, moreover</td>
      <td>Ook, daarnaast</td>
      <td>ʌʟso</td>
    </tr>
    <tr>
      <td>Because, as</td>
      <td>Omdat</td>
      <td>kʌs</td>
    </tr>
    <tr>
      <td>Therefore</td>
      <td>Daarom, dus</td>
      <td>dʌs</td>
    </tr>
    <tr>
      <td>If</td>
      <td>Als</td>
      <td>if</td>
    </tr>
    <tr>
      <td>Whether</td>
      <td>Of</td>
      <td>ȿu</td>
    </tr>
    <tr>
      <td>Than</td>
      <td>Dan</td>
      <td>dʌn</td>
    </tr>
    <tr>
      <td>This</td>
      <td>Dit, deze</td>
      <td>dλs</td>
    </tr>
    <tr>
      <td>That</td>
      <td>Die, dat</td>
      <td>dʌt</td>
    </tr>
    <tr>
      <td>Here</td>
      <td>Hier</td>
      <td>ɑsy</td>
    </tr>
    <tr>
      <td>There</td>
      <td>Daar</td>
      <td>ɑsɑ</td>
    </tr>
    <tr>
      <td>Next</td>
      <td>Volgende</td>
      <td>tɔm</td>
    </tr>
    <tr>
      <td>Previous</td>
      <td>Vorige</td>
      <td>ɥэn</td>
    </tr>
    <tr>
      <td>Begin</td>
      <td>Begin</td>
      <td>kɔmo</td>
    </tr>
    <tr>
      <td>Mid</td>
      <td>Mid</td>
      <td>mid</td>
    </tr>
    <tr>
      <td>End</td>
      <td>Eind</td>
      <td>эnde</td>
    </tr>
    <tr>
      <td>Like</td>
      <td>Zoals</td>
      <td>ʟyko</td>
    </tr>
    <tr>
      <td>Complete, full, finished, saturated</td>
      <td>Compleet, volledig, 'af', verzadigd</td>
      <td>ʌpo</td>
    </tr>
    <tr>
      <td>Norm, rule</td>
      <td>Norm, regel</td>
      <td>nɔrmu</td>
    </tr>
    <tr>
      <td>Value (moral)</td>
      <td>Waarde (moreel)</td>
      <td>vɑʟu</td>
    </tr>
    <tr>
      <td>Value (capital)</td>
      <td>Waarde (kapitaal)</td>
      <td>fundλ</td>
    </tr>
    <tr>
      <td>Normal, usual</td>
      <td>Normaal, gewoonlijk</td>
      <td>nɔrmuto</td>
    </tr>
    <tr>
      <td>Abnormal, unusual</td>
      <td>Abnormaal, ongewoonlijk</td>
      <td colspan="1" rowspan="2">nenɔrmuto</td>
    </tr>
    <tr>
      <td>Extraordinary</td>
      <td>Bijzonder</td>
    </tr>
    <tr>
      <td>Same</td>
      <td>Zelfde</td>
      <td>sɑmo</td>
    </tr>
    <tr>
      <td>Different, other</td>
      <td>Anders</td>
      <td>nesɑmo</td>
    </tr>
    <tr>
      <td>Known, familiar</td>
      <td>Bekend</td>
      <td>fʌmʟɑ</td>
    </tr>
    <tr>
      <td>Unknown, strange</td>
      <td>Onbekend, vreemd</td>
      <td>nefʌmʟɑ</td>
    </tr>
    <tr>
      <td>Enjoyable</td>
      <td>Lekker</td>
      <td>ɥem</td>
    </tr>
    <tr>
      <td>Unpleasant</td>
      <td>Vies</td>
      <td>eω</td>
    </tr>
    <tr>
      <td>Fast</td>
      <td>Snel</td>
      <td>ɥyt</td>
    </tr>
    <tr>
      <td>Slow</td>
      <td>Langzaam</td>
      <td>neɥyt</td>
    </tr>
    <tr>
      <td>Cool</td>
      <td>Cool</td>
      <td>Σsy</td>
    </tr>
    <tr>
      <td>Beauty, beautiful</td>
      <td>Mooi</td>
      <td>bo</td>
    </tr>
    <tr>
      <td>Ugly</td>
      <td>Lelijk</td>
      <td>fugo</td>
    </tr>
    <tr>
      <td>Fancy</td>
      <td>Fancy</td>
      <td>fænȿy</td>
    </tr>
    <tr>
      <td>Clean</td>
      <td>Schoon</td>
      <td>ȿebo</td>
    </tr>
    <tr>
      <td>Dirty</td>
      <td>Vies, smerig</td>
      <td>ȿefugo</td>
    </tr>
    <tr>
      <td>Important</td>
      <td>Belangrijk</td>
      <td>impo</td>
    </tr>
    <tr>
      <td>Irrelevant</td>
      <td>Onbelangrijk</td>
      <td>neimpo</td>
    </tr>
    <tr>
      <td>Big, tall</td>
      <td>Groot, lang</td>
      <td>ωɔp</td>
    </tr>
    <tr>
      <td>Small</td>
      <td>Klein</td>
      <td>ʟiʟ</td>
    </tr>
    <tr>
      <td>Young, new</td>
      <td>Jong, nieuw</td>
      <td>ɥuno</td>
    </tr>
    <tr>
      <td>Old</td>
      <td>Oud</td>
      <td>odu</td>
    </tr>
    <tr>
      <td>Alone</td>
      <td>Alleen</td>
      <td>ʟono</td>
    </tr>
    <tr>
      <td>Together</td>
      <td>Samen</td>
      <td>эnsɑmo</td>
    </tr>
    <tr>
      <td>Pain</td>
      <td>Pijn</td>
      <td>pλn</td>
    </tr>
    <tr>
      <td>Pleasure</td>
      <td>Lust</td>
      <td>lusɑ</td>
    </tr>
    <tr>
      <td>Magic</td>
      <td>Magie</td>
      <td>mэxik</td>
    </tr>
    <tr>
      <td>Meaning</td>
      <td>Betekenis</td>
      <td>signyfo</td>
    </tr>
    <tr>
      <td>Steady, consistent</td>
      <td>Consistent</td>
      <td>kɔnsэkɑ</td>
    </tr>
  </tbody>
</table>

### General

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Name</td>
      <td>Naam</td>
      <td>nɔm</td>
    </tr>
    <tr>
      <td>Home</td>
      <td>Thuis</td>
      <td>hom</td>
    </tr>
    <tr>
      <td>Work</td>
      <td>Werk</td>
      <td>ωσko</td>
    </tr>
    <tr>
      <td>City</td>
      <td>Stad</td>
      <td>stэte</td>
    </tr>
    <tr>
      <td>Building, house</td>
      <td>Gebouw, woning</td>
      <td>bσωɑ</td>
    </tr>
    <tr>
      <td>Country</td>
      <td>Land</td>
      <td>lʌnde</td>
    </tr>
    <tr>
      <td>Voyage</td>
      <td>Reis</td>
      <td>voɥɑ</td>
    </tr>
    <tr>
      <td>Fact</td>
      <td>Feit</td>
      <td>fэkto</td>
    </tr>
    <tr>
      <td>Opinion</td>
      <td>Mening</td>
      <td>mλnuno</td>
    </tr>
    <tr>
      <td>Deep</td>
      <td>Diep(gang)</td>
      <td>dypfo</td>
    </tr>
    <tr>
      <td>Joke</td>
      <td>Grap</td>
      <td>ɥuko</td>
    </tr>
    <tr>
      <td>Joking</td>
      <td>Grappend</td>
      <td>ɥukono</td>
    </tr>
    <tr>
      <td>Serious</td>
      <td>Serieus</td>
      <td>sirλus</td>
    </tr>
    <tr>
      <td>Quote</td>
      <td>Citaat</td>
      <td>sytɑto</td>
    </tr>
    <tr>
      <td>Reference</td>
      <td>Referentie</td>
      <td>refэro</td>
    </tr>
    <tr>
      <td>Free</td>
      <td>Gratis</td>
      <td>fyby</td>
    </tr>
    <tr>
      <td>Profit</td>
      <td>Winst</td>
      <td>fyt</td>
    </tr>
    <tr>
      <td>Cheap</td>
      <td>Goedkoop</td>
      <td>xypu</td>
    </tr>
    <tr>
      <td>Problem</td>
      <td>Probleem</td>
      <td>pэkɑ</td>
    </tr>
    <tr>
      <td>Music</td>
      <td>Muziek</td>
      <td>musyk</td>
    </tr>
    <tr>
      <td>Song</td>
      <td>Nummer, liedje</td>
      <td>kʌnto</td>
    </tr>
    <tr>
      <td>Piano</td>
      <td>Piano</td>
      <td>pɑno</td>
    </tr>
    <tr>
      <td>Guitar</td>
      <td>Gitaar</td>
      <td>gytɑr</td>
    </tr>
    <tr>
      <td>Artist</td>
      <td>Artiest</td>
      <td>ɑrtyk</td>
    </tr>
    <tr>
      <td>Bag</td>
      <td>Tas</td>
      <td>sʌko</td>
    </tr>
    <tr>
      <td>Ball</td>
      <td>Bal</td>
      <td>bʌʟ</td>
    </tr>
    <tr>
      <td>Hobby</td>
      <td>Hobby</td>
      <td>hɔby</td>
    </tr>
    <tr>
      <td>Sport</td>
      <td>Sport</td>
      <td>эspɔrtɑ</td>
    </tr>
    <tr>
      <td>Bed</td>
      <td>Bed</td>
      <td>bэd</td>
    </tr>
    <tr>
      <td>Room</td>
      <td>Kamer</td>
      <td>rθm</td>
    </tr>
    <tr>
      <td>Garden</td>
      <td>Tuin</td>
      <td>kurɑ</td>
    </tr>
    <tr>
      <td>Glasses</td>
      <td>Bril</td>
      <td>oku-vytro</td>
    </tr>
    <tr>
      <td>Door/port</td>
      <td>Deur, poort</td>
      <td>pɔrtu</td>
    </tr>
    <tr>
      <td>Wall</td>
      <td>Muur</td>
      <td>ωɔl</td>
    </tr>
    <tr>
      <td>Window</td>
      <td>Raam</td>
      <td>ωindoω</td>
    </tr>
    <tr>
      <td>Corner</td>
      <td>Hoek</td>
      <td>hθk</td>
    </tr>
    <tr>
      <td>Hole</td>
      <td>Gat</td>
      <td>ȿʌt</td>
    </tr>
    <tr>
      <td>Book</td>
      <td>Boek</td>
      <td>lybre</td>
    </tr>
    <tr>
      <td>Notebook</td>
      <td>Schrift</td>
      <td>ryt-lybre</td>
    </tr>
    <tr>
      <td>Pen</td>
      <td>Pen</td>
      <td>lydo</td>
    </tr>
    <tr>
      <td>Vehicle</td>
      <td>Voertuig</td>
      <td>tokɑ</td>
    </tr>
    <tr>
      <td>Car</td>
      <td>Auto</td>
      <td>motokɑ</td>
    </tr>
    <tr>
      <td>Train</td>
      <td>Trein</td>
      <td>tλn</td>
    </tr>
    <tr>
      <td>Bike</td>
      <td>Fiets</td>
      <td>bΣk</td>
    </tr>
    <tr>
      <td>Plane</td>
      <td>Vliegtuig</td>
      <td>æro-tokɑ</td>
    </tr>
    <tr>
      <td>Chair</td>
      <td>Stoel</td>
      <td>sэgθ</td>
    </tr>
    <tr>
      <td>Table</td>
      <td>Tafel</td>
      <td>tɑblu</td>
    </tr>
    <tr>
      <td>Desk</td>
      <td>Bureau</td>
      <td>ωσk-tɑbʟu</td>
    </tr>
    <tr>
      <td>Bank</td>
      <td>Bank</td>
      <td>bʌnku</td>
    </tr>
    <tr>
      <td>Cushion, pillow</td>
      <td>Kussen</td>
      <td>pilθω</td>
    </tr>
    <tr>
      <td>Basket</td>
      <td>Mand</td>
      <td>mɑnde</td>
    </tr>
    <tr>
      <td>Bowl</td>
      <td>Kom</td>
      <td>boωʟe</td>
    </tr>
    <tr>
      <td>Shelf</td>
      <td>Plank</td>
      <td>ȿævo</td>
    </tr>
    <tr>
      <td>Closet, cupboard, case</td>
      <td>Kast</td>
      <td>ȿævos</td>
    </tr>
    <tr>
      <td>School</td>
      <td>School</td>
      <td>ekɔl</td>
    </tr>
    <tr>
      <td>Class</td>
      <td>Klas</td>
      <td>kɑlʌs</td>
    </tr>
    <tr>
      <td>Classroom</td>
      <td>Lokaal</td>
      <td>kɑlʌs-rθm</td>
    </tr>
    <tr>
      <td>Open</td>
      <td>Open</td>
      <td>open</td>
    </tr>
    <tr>
      <td>Closed</td>
      <td>Dicht, gesloten</td>
      <td>syto</td>
    </tr>
    <tr>
      <td>Reaction</td>
      <td>Reactie</td>
      <td>rλʌktɑ</td>
    </tr>
    <tr>
      <td>Allergy</td>
      <td>Allergie</td>
      <td>ωɔmrλʌktɑ</td>
    </tr>
    <tr>
      <td>Sick</td>
      <td>Ziek</td>
      <td>syk</td>
    </tr>
    <tr>
      <td>Disease</td>
      <td>Ziekte</td>
      <td>kʌdsyk</td>
    </tr>
    <tr>
      <td>Healthy</td>
      <td>Gezond</td>
      <td>sʌntλ</td>
    </tr>
    <tr>
      <td>Health</td>
      <td>Gezondheid</td>
      <td>kʌdsʌntλ</td>
    </tr>
    <tr>
      <td>Store</td>
      <td>Winkel</td>
      <td>ȿɔp</td>
    </tr>
    <tr>
      <td>Supermarket</td>
      <td>Supermarkt</td>
      <td>ωɔp-ȿɔp</td>
    </tr>
    <tr>
      <td>Photograph/picture</td>
      <td>Foto</td>
      <td>foto</td>
    </tr>
    <tr>
      <td>Movie/video</td>
      <td>Beeld/video</td>
      <td>vydo</td>
    </tr>
    <tr>
      <td>Sound</td>
      <td>Geluid</td>
      <td>fono</td>
    </tr>
    <tr>
      <td>Smell</td>
      <td>Geur</td>
      <td>odɔr</td>
    </tr>
    <tr>
      <td>Trans- (across, spanning)</td>
      <td>Trans- (over)</td>
      <td>tʌn</td>
    </tr>
    <tr>
      <td>Cis- (within)</td>
      <td>Cis- (binnen)</td>
      <td>sis</td>
    </tr>
    <tr>
      <td>Tele- (over distance)</td>
      <td>Tele- (op afstand)</td>
      <td>tλʟe</td>
    </tr>
    <tr>
      <td>Television</td>
      <td>Televisie</td>
      <td>tλʟe-vydo</td>
    </tr>
    <tr>
      <td>Telephone</td>
      <td>Telefoon</td>
      <td>tλʟe-fono</td>
    </tr>
    <tr>
      <td>Radio</td>
      <td>Radio</td>
      <td>tλʟe-musyk</td>
    </tr>
    <tr>
      <td>Camera</td>
      <td>Camera</td>
      <td>xymy</td>
    </tr>
    <tr>
      <td>Screen</td>
      <td>Scherm</td>
      <td>ȿin-vytro</td>
    </tr>
    <tr>
      <td>Machine</td>
      <td>Machine</td>
      <td>mɑxine</td>
    </tr>
    <tr>
      <td>Computer</td>
      <td>Computer</td>
      <td>kʌʟkuʟɑ</td>
    </tr>
    <tr>
      <td>Tool</td>
      <td>Gereedschap</td>
      <td>tulo</td>
    </tr>
    <tr>
      <td>Screw</td>
      <td>Schroef</td>
      <td>rum</td>
    </tr>
    <tr>
      <td>Pan</td>
      <td>Pan</td>
      <td>pɔt</td>
    </tr>
    <tr>
      <td>Party</td>
      <td>Feest</td>
      <td>fэd</td>
    </tr>
    <tr>
      <td>Pool, bath</td>
      <td>Zwembad</td>
      <td>ɑkωɑ-ȿʌt</td>
    </tr>
    <tr>
      <td>Present</td>
      <td>Cadeau</td>
      <td>kɑdo</td>
    </tr>
    <tr>
      <td>Treasure</td>
      <td>Schat</td>
      <td>ȿɑsoxu</td>
    </tr>
    <tr>
      <td>Row</td>
      <td>Rij</td>
      <td>roω</td>
    </tr>
    <tr>
      <td>Power</td>
      <td>Kracht</td>
      <td>pσer</td>
    </tr>
    <tr>
      <td>-</td>
      <td>Jarig</td>
      <td>ɥipy</td>
    </tr>
  </tbody>
</table>

### Common expressions

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>How are you (doing)?</td>
      <td>Hoe gaat het?</td>
      <td>dɑ ʌres kɑ?</td>
    </tr>
    <tr>
      <td>Sorry</td>
      <td>Sorry</td>
      <td>sɔry</td>
    </tr>
    <tr>
      <td>Thank you</td>
      <td>Dankjewel</td>
      <td>xʌno</td>
    </tr>
    <tr>
      <td>You're welcome</td>
      <td>Alsjeblieft (gevend)</td>
      <td colspan="1" rowspan="2">nepэkɑ</td>
    </tr>
    <tr>
      <td>Of course</td>
      <td>Natuurlijk</td>
    </tr>
    <tr>
      <td>Please</td>
      <td>Alsjeblieft (vragend)</td>
      <td>ωys</td>
    </tr>
    <tr>
      <td>(For) example</td>
      <td>(Bij)voorbeeld</td>
      <td>эksΣmu</td>
    </tr>
    <tr>
      <td>Bless you</td>
      <td>Gezondheid</td>
      <td>bɔnsʌntλ</td>
    </tr>
    <tr>
      <td>Enjoy your meal</td>
      <td>Eet smakelijk</td>
      <td>bɔnэskɑ</td>
    </tr>
    <tr>
      <td>Good job!</td>
      <td>Goed gedaan!</td>
      <td>bɔntθno</td>
    </tr>
  </tbody>
</table>

### Interrogative

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>What</td>
      <td>Wat</td>
      <td>ku</td>
    </tr>
    <tr>
      <td>Where</td>
      <td>Waar</td>
      <td>kσ</td>
    </tr>
    <tr>
      <td>Why</td>
      <td>Waarom</td>
      <td>ko</td>
    </tr>
    <tr>
      <td>How</td>
      <td>Hoe</td>
      <td>kɑ</td>
    </tr>
    <tr>
      <td>When</td>
      <td>Wanneer</td>
      <td>kΣ</td>
    </tr>
    <tr>
      <td>Which (pronoun)</td>
      <td>Welke (vnw)</td>
      <td>kλ</td>
    </tr>
    <tr>
      <td>Who (subject)</td>
      <td>Wie (onderwerp)</td>
      <td>ky</td>
    </tr>
  </tbody>
</table>

### Interjections

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Well</td>
      <td>Nou</td>
      <td>nθ</td>
    </tr>
    <tr>
      <td>Oops</td>
      <td>Oeps</td>
      <td>ωθpes</td>
    </tr>
    <tr>
      <td>Unfortunately</td>
      <td>Helaas</td>
      <td>ȿΣdes</td>
    </tr>
    <tr>
      <td>In fact</td>
      <td>Eigenlijk</td>
      <td>ɑfэkto</td>
    </tr>
    <tr>
      <td>-</td>
      <td>Oei</td>
      <td>θɥ</td>
    </tr>
  </tbody>
</table>

### Localities

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Up</td>
      <td>-</td>
      <td>up</td>
    </tr>
    <tr>
      <td>Down</td>
      <td>-</td>
      <td>dσω</td>
    </tr>
    <tr>
      <td>Left</td>
      <td>Links</td>
      <td>ʟэv</td>
    </tr>
    <tr>
      <td>Right</td>
      <td>Rechts</td>
      <td>rΣt</td>
    </tr>
    <tr>
      <td>Above</td>
      <td>Boven</td>
      <td>bovder</td>
    </tr>
    <tr>
      <td>Underneath</td>
      <td>Onder</td>
      <td>under</td>
    </tr>
    <tr>
      <td>In front</td>
      <td>Voor</td>
      <td>vɔrder</td>
    </tr>
    <tr>
      <td>Behind</td>
      <td>Achter</td>
      <td>hinder</td>
    </tr>
    <tr>
      <td>Next to</td>
      <td>Naast</td>
      <td>nэsder</td>
    </tr>
    <tr>
      <td>(In) between</td>
      <td>Tussen</td>
      <td>ωisder</td>
    </tr>
    <tr>
      <td>In(side)</td>
      <td>In/binnen</td>
      <td>inder</td>
    </tr>
    <tr>
      <td>Out(side)</td>
      <td>Uit/buiten</td>
      <td>Σder</td>
    </tr>
    <tr>
      <td>Atop</td>
      <td>Op (rakend boven)</td>
      <td>bovtσȿ</td>
    </tr>
    <tr>
      <td>Against</td>
      <td>Tegen (naast rakend)</td>
      <td>nэstσȿ</td>
    </tr>
    <tr>
      <td>Through(out)</td>
      <td>Door(heen)</td>
      <td>vydɔr</td>
    </tr>
    <tr>
      <td>Into</td>
      <td>In (bew.)</td>
      <td>vyinder</td>
    </tr>
    <tr>
      <td>Out of</td>
      <td>Uit (bew.)</td>
      <td>vyΣder</td>
    </tr>
    <tr>
      <td>Over</td>
      <td>Overheen (bew.)</td>
      <td>vybovder</td>
    </tr>
    <tr>
      <td>From</td>
      <td>Van(af), van(uit)</td>
      <td>vyɑsy</td>
    </tr>
    <tr>
      <td>To</td>
      <td>Naar(toe)</td>
      <td>vyɑsɑ</td>
    </tr>
    <tr>
      <td>Up (mov.)</td>
      <td>Omhoog</td>
      <td>vyup</td>
    </tr>
    <tr>
      <td>Down (mov.)</td>
      <td>Omlaag, naar beneden</td>
      <td>vydσω</td>
    </tr>
  </tbody>
</table>

### Prepositions

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>From (time)</td>
      <td>Van(af) (tijd)</td>
      <td>dΣmy</td>
    </tr>
    <tr>
      <td>To (time), until</td>
      <td>Tot (tijd)</td>
      <td>dΣmɑ</td>
    </tr>
    <tr>
      <td>About</td>
      <td>Over</td>
      <td>uber</td>
    </tr>
    <tr>
      <td>Between</td>
      <td>Tussen</td>
      <td>tikse</td>
    </tr>
    <tr>
      <td>(One) of</td>
      <td>(Een) van</td>
      <td>us</td>
    </tr>
    <tr>
      <td>For (reason)</td>
      <td>Voor (reden)</td>
      <td>fʌsɑ</td>
    </tr>
    <tr>
      <td>Both</td>
      <td>Beide, allebei</td>
      <td>buder</td>
    </tr>
  </tbody>
</table>

### Cardinal directions

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>North</td>
      <td>Noord</td>
      <td>nɔren</td>
    </tr>
    <tr>
      <td>East</td>
      <td>Oost</td>
      <td>Σsde</td>
    </tr>
    <tr>
      <td>South</td>
      <td>Zuid</td>
      <td>sude</td>
    </tr>
    <tr>
      <td>West</td>
      <td>West</td>
      <td>ωэsde</td>
    </tr>
  </tbody>
</table>

### Numbers

<table class="words">
  <tbody>
    <tr>
      <td>0</td>
      <td>niʟ</td>
    </tr>
    <tr>
      <td>1</td>
      <td>θn</td>
    </tr>
    <tr>
      <td>2</td>
      <td>by</td>
    </tr>
    <tr>
      <td>3</td>
      <td>xy</td>
    </tr>
    <tr>
      <td>4</td>
      <td>dэkɑ</td>
    </tr>
    <tr>
      <td>5</td>
      <td>py</td>
    </tr>
    <tr>
      <td>6</td>
      <td>эsɑ</td>
    </tr>
    <tr>
      <td>7</td>
      <td>sid</td>
    </tr>
    <tr>
      <td>8</td>
      <td>ɔkdɑ</td>
    </tr>
    <tr>
      <td>9</td>
      <td>nik</td>
    </tr>
    <tr>
      <td>10</td>
      <td>dys</td>
    </tr>
    <tr>
      <td>20</td>
      <td>bydin</td>
    </tr>
    <tr>
      <td>30</td>
      <td>xydin</td>
    </tr>
    <tr>
      <td>40</td>
      <td>dэdin</td>
    </tr>
    <tr>
      <td>50</td>
      <td>pydin</td>
    </tr>
    <tr>
      <td>60</td>
      <td>эsdin</td>
    </tr>
    <tr>
      <td>70</td>
      <td>sidin</td>
    </tr>
    <tr>
      <td>80</td>
      <td>ɔkdin</td>
    </tr>
    <tr>
      <td>90</td>
      <td>ninin</td>
    </tr>
    <tr>
      <td>100</td>
      <td>cэt</td>
    </tr>
    <tr>
      <td>1000</td>
      <td>kin</td>
    </tr>
    <tr>
      <td>1.000.000</td>
      <td>miʟ</td>
    </tr>
    <tr>
      <td>1.000.000.000</td>
      <td>gig</td>
    </tr>
    <tr>
      <td>Infinity</td>
      <td>ʌʟdin</td>
    </tr>
  </tbody>
</table>

### Ordinal numbers

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>-st, -nd, -rd</td>
      <td>-ste</td>
      <td>эd-</td>
    </tr>
    <tr>
      <td>First</td>
      <td>Eerste</td>
      <td>эdθn</td>
    </tr>
    <tr>
      <td>Second</td>
      <td>Tweede</td>
      <td>эdby</td>
    </tr>
    <tr>
      <td>Third</td>
      <td>Derde</td>
      <td>эdxy</td>
    </tr>
    <tr>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
    <tr>
      <td>Last</td>
      <td>Laatste</td>
      <td>эdʟʌs</td>
    </tr>
    <tr>
      <td>Random ('a')</td>
      <td>Willekeurig ('een')</td>
      <td>эdrʌn</td>
    </tr>
  </tbody>
</table>

For constructions like 'two thirds', we utilize the word 'pэr', which means something akin 'one over'. So in our language 'two thirds' would be 'by pэrxy'.

### Mathematics

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>To count</td>
      <td>Tellen</td>
      <td>kʌʟ-</td>
    </tr>
    <tr>
      <td>Plus / to add</td>
      <td>Plus / optellen</td>
      <td>pɔs-</td>
    </tr>
    <tr>
      <td>Minus / to subtract</td>
      <td>Min / aftrekken</td>
      <td>seb-</td>
    </tr>
    <tr>
      <td>Times / to multiply</td>
      <td>Keer / vermenigvuldigen</td>
      <td>tΣm-</td>
    </tr>
    <tr>
      <td>Over / to divide</td>
      <td>Over / delen</td>
      <td>dλv-</td>
    </tr>
    <tr>
      <td>To equal</td>
      <td>Is gelijk aan</td>
      <td>eku-</td>
    </tr>
    <tr>
      <td>Positive</td>
      <td>Positief</td>
      <td>pɔso</td>
    </tr>
    <tr>
      <td>Negative</td>
      <td>Negatief</td>
      <td>sebo</td>
    </tr>
  </tbody>
</table>

### Language

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Language</td>
      <td>Taal</td>
      <td>ʟʌnge</td>
    </tr>
    <tr>
      <td>Alphabet</td>
      <td>Alfabet</td>
      <td>ʌʟfabэt</td>
    </tr>
    <tr>
      <td>Letter</td>
      <td>Letter</td>
      <td>ʟэter</td>
    </tr>
    <tr>
      <td>Sentence</td>
      <td>Zin</td>
      <td>sine</td>
    </tr>
    <tr>
      <td>Text</td>
      <td>Tekst</td>
      <td>tэku</td>
    </tr>
    <tr>
      <td>Word</td>
      <td>Woord</td>
      <td>ωɔrde</td>
    </tr>
    <tr>
      <td>Question</td>
      <td>Vraag</td>
      <td>fʌrɑ</td>
    </tr>
    <tr>
      <td>Answer</td>
      <td>Antwoord</td>
      <td>pʌrɑ</td>
    </tr>
    <tr>
      <td>Letter</td>
      <td>Brief</td>
      <td>ȿɔt</td>
    </tr>
    <tr>
      <td>Story, history</td>
      <td>Verhaal, geschiedenis</td>
      <td>histɔru</td>
    </tr>
    <tr>
      <td>Translation</td>
      <td>Vertaling</td>
      <td>tʌn-ʟʌnge</td>
    </tr>
    <tr>
      <td>Conversation</td>
      <td>Gesprek</td>
      <td>kɔnverɑ</td>
    </tr>
    <tr>
      <td>Discussion</td>
      <td>Discussie</td>
      <td>diskesɑ</td>
    </tr>
  </tbody>
</table>

### Time

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Time</td>
      <td>Tijd</td>
      <td>dΣm</td>
    </tr>
    <tr>
      <td>Millenium</td>
      <td>Millenium</td>
      <td>kinɥir</td>
    </tr>
    <tr>
      <td>Century</td>
      <td>Eeuw</td>
      <td>cэtɥir</td>
    </tr>
    <tr>
      <td>Decade</td>
      <td>Decennium</td>
      <td>dysɥir</td>
    </tr>
    <tr>
      <td>Year</td>
      <td>Jaar</td>
      <td>ɥir</td>
    </tr>
    <tr>
      <td>Quarter (of a year)</td>
      <td>Kwartaal</td>
      <td>xyʟθn</td>
    </tr>
    <tr>
      <td>Month</td>
      <td>Maand</td>
      <td>ʟθn</td>
    </tr>
    <tr>
      <td>Week</td>
      <td>Week</td>
      <td>ωik</td>
    </tr>
    <tr>
      <td>Day</td>
      <td>Dag</td>
      <td>sɔʟ</td>
    </tr>
    <tr>
      <td>Night</td>
      <td>Nacht</td>
      <td>mэr</td>
    </tr>
    <tr>
      <td>Hour</td>
      <td>Uur</td>
      <td>σr</td>
    </tr>
    <tr>
      <td>Minute</td>
      <td>Minuut</td>
      <td>minut</td>
    </tr>
    <tr>
      <td>Second</td>
      <td>Seconde</td>
      <td>sэk</td>
    </tr>
    <tr>
      <td>Clock</td>
      <td>Klok</td>
      <td>ʟɔko</td>
    </tr>
    <tr>
      <td>Present</td>
      <td>Heden</td>
      <td>nσ</td>
    </tr>
    <tr>
      <td>Past</td>
      <td>Verleden</td>
      <td>tσω</td>
    </tr>
    <tr>
      <td>Future</td>
      <td>Toekomst</td>
      <td>futσ</td>
    </tr>
    <tr>
      <td>Morning</td>
      <td>Ochtend</td>
      <td>kɔmosɔʟ</td>
    </tr>
    <tr>
      <td>Afternoon</td>
      <td>Middag</td>
      <td>midsɔʟ</td>
    </tr>
    <tr>
      <td>Evening</td>
      <td>Avond</td>
      <td>omэr (abbr. of kɔmomэr)</td>
    </tr>
    <tr>
      <td>Midnight</td>
      <td>Middernacht</td>
      <td>midmэr</td>
    </tr>
    <tr>
      <td>At day</td>
      <td>Overdag</td>
      <td>ɑsɔʟ</td>
    </tr>
    <tr>
      <td>At night</td>
      <td>'s nachts</td>
      <td>ɑmэr</td>
    </tr>
    <tr>
      <td>Now</td>
      <td>Nu</td>
      <td>ɑnσ</td>
    </tr>
    <tr>
      <td>Then (past), earlier, ago</td>
      <td>Toen, eerder, geleden</td>
      <td>ɑtσω</td>
    </tr>
    <tr>
      <td>Then (future), later, soon</td>
      <td>Dan, later, binnekort</td>
      <td>ɑfutσ</td>
    </tr>
    <tr>
      <td>Before</td>
      <td>Voordat</td>
      <td>ɑkɔmo</td>
    </tr>
    <tr>
      <td>During, while</td>
      <td>Gedurende, tijdens, terwijl</td>
      <td>ɑmid</td>
    </tr>
    <tr>
      <td>After</td>
      <td>Nadat</td>
      <td>ɑnde</td>
    </tr>
    <tr>
      <td>Today</td>
      <td>Vandaag</td>
      <td>dλssɔʟ</td>
    </tr>
    <tr>
      <td>Yesterday</td>
      <td>Gisteren</td>
      <td>tɔmsɔʟ</td>
    </tr>
    <tr>
      <td>Tomorrow</td>
      <td>Morgen</td>
      <td>ɥэnsɔʟ</td>
    </tr>
    <tr>
      <td>Weekend</td>
      <td>Weekend</td>
      <td>ωikэnde</td>
    </tr>
    <tr>
      <td>Birthday</td>
      <td>Verjaardag</td>
      <td>ɥipy-sɔʟ</td>
    </tr>
    <tr>
      <td>Again</td>
      <td>Opnieuw</td>
      <td>rλ</td>
    </tr>
    <tr>
      <td>Still</td>
      <td>Nog steeds</td>
      <td colspan="1" rowspan="2">ɑturo</td>
    </tr>
    <tr>
      <td>Anymore</td>
      <td>Niet meer</td>
    </tr>
  </tbody>
</table>

### Seasons

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Spring</td>
      <td>Lente</td>
      <td>xin</td>
    </tr>
    <tr>
      <td>Summer</td>
      <td>Zommer</td>
      <td>sɔmɑ</td>
    </tr>
    <tr>
      <td>Autumn</td>
      <td>Herfst</td>
      <td>ʌdem</td>
    </tr>
    <tr>
      <td>Winter</td>
      <td>Winter</td>
      <td>ωindɑ</td>
    </tr>
  </tbody>
</table>

### Months of the year

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>March</td>
      <td>Maart</td>
      <td>rλnuɑry</td>
    </tr>
    <tr>
      <td>April</td>
      <td>April</td>
      <td>pʌperɑry</td>
    </tr>
    <tr>
      <td>May</td>
      <td>Mei</td>
      <td>mɑɥoɑry</td>
    </tr>
    <tr>
      <td>June</td>
      <td>Juni</td>
      <td>ʟysuɑry</td>
    </tr>
    <tr>
      <td>July</td>
      <td>Juli</td>
      <td>hʌrmuɑry</td>
    </tr>
    <tr>
      <td>August</td>
      <td>Augustus</td>
      <td>rɔbuɑry</td>
    </tr>
    <tr>
      <td>September</td>
      <td>September</td>
      <td>sidɑry</td>
    </tr>
    <tr>
      <td>October</td>
      <td>Oktober</td>
      <td>okduɑry</td>
    </tr>
    <tr>
      <td>November</td>
      <td>November</td>
      <td>ninuɑry</td>
    </tr>
    <tr>
      <td>December</td>
      <td>December</td>
      <td>oduɑry</td>
    </tr>
    <tr>
      <td>January</td>
      <td>Januari</td>
      <td>ɥunoɑry</td>
    </tr>
    <tr>
      <td>February</td>
      <td>Februari</td>
      <td>oωuɑry</td>
    </tr>
  </tbody>
</table>

### Days of the week

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Wednesday</td>
      <td>Woensdag</td>
      <td>sɔʟθn</td>
    </tr>
    <tr>
      <td>Thursday</td>
      <td>Donderdag</td>
      <td>sɔʟby</td>
    </tr>
    <tr>
      <td>Friday</td>
      <td>Vrijdag</td>
      <td>sɔʟxy</td>
    </tr>
    <tr>
      <td>Saturday</td>
      <td>Zaterdag</td>
      <td>sɔʟdэkɑ</td>
    </tr>
    <tr>
      <td>Sunday</td>
      <td>Zondag</td>
      <td>sɔʟpy</td>
    </tr>
    <tr>
      <td>Monday</td>
      <td>Maandag</td>
      <td>sɔʟэsɑ</td>
    </tr>
    <tr>
      <td>Tuesday</td>
      <td>Dinsdag</td>
      <td>sɔʟsid</td>
    </tr>
  </tbody>
</table>

<small>(While we were at it, we also once and for all resolved whether the week starts on Monday or Sunday--in our language it starts on Wednesday, take it or leave it.)</small>

### Emotions

<table class="words">
  <tbody>
    <tr>
      <td colspan="1" rowspan="4">Angry</td>
      <td>Angry</td>
      <td>ɑrɑgo</td>
    </tr>
    <tr>
      <td>Annoyed</td>
      <td>yrɑto</td>
    </tr>
    <tr>
      <td>Frustrated</td>
      <td>rusɑto</td>
    </tr>
    <tr>
      <td>Jealous</td>
      <td>ɥɑʟono</td>
    </tr>
    <tr>
      <td colspan="1" rowspan="4">Sad</td>
      <td>Saddened</td>
      <td colspan="1" rowspan="2">deprэso / mэh</td>
    </tr>
    <tr>
      <td>Depressed</td>
    </tr>
    <tr>
      <td>Stressed</td>
      <td>sэtvo</td>
    </tr>
    <tr>
      <td>Alone / lonely</td>
      <td>ʟono</td>
    </tr>
    <tr>
      <td colspan="1" rowspan="4">Fear</td>
      <td>Fear(ful)</td>
      <td>sɑkɑro</td>
    </tr>
    <tr>
      <td>Insecure</td>
      <td>nesэkuro</td>
    </tr>
    <tr>
      <td>Anxious</td>
      <td>ʌxono</td>
    </tr>
    <tr>
      <td>Shy</td>
      <td>ȿΣ</td>
    </tr>
    <tr>
      <td colspan="1" rowspan="6">Joy</td>
      <td>Happy</td>
      <td>bΣto</td>
    </tr>
    <tr>
      <td>In love</td>
      <td>ʟuvo</td>
    </tr>
    <tr>
      <td>Excited</td>
      <td>eksyto</td>
    </tr>
    <tr>
      <td>Confident</td>
      <td>sэkuro</td>
    </tr>
    <tr>
      <td>Blissfully unaware, illusioned</td>
      <td>ʟusyno</td>
    </tr>
    <tr>
      <td>Calm</td>
      <td>kʌʟmo</td>
    </tr>
    <tr>
      <td colspan="1" rowspan="3">Disgust</td>
      <td>Disgusted</td>
      <td>disgusto</td>
    </tr>
    <tr>
      <td>Embarrassed</td>
      <td>embɑrʌso</td>
    </tr>
    <tr>
      <td>Sarcastic</td>
      <td>sʌrkʌso</td>
    </tr>
    <tr>
      <td colspan="1" rowspan="4">Surprise</td>
      <td>Surprised</td>
      <td>sepryso</td>
    </tr>
    <tr>
      <td>In awe</td>
      <td>ʌωo</td>
    </tr>
    <tr>
      <td>Disillusioned</td>
      <td>neʟusyno</td>
    </tr>
    <tr>
      <td>Curious</td>
      <td>kuro</td>
    </tr>
    <tr>
      <td colspan="1" rowspan="4">'Bad'</td>
      <td>Bored</td>
      <td>bɔro</td>
    </tr>
    <tr>
      <td>Tired</td>
      <td>tΣro</td>
    </tr>
    <tr>
      <td>Indifferent</td>
      <td>nekæro</td>
    </tr>
    <tr>
      <td>Delusional</td>
      <td>deʟuʟo</td>
    </tr>
  </tbody>
</table>

### Senses

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Vision/sight</td>
      <td>Zicht</td>
      <td>vysɑ</td>
    </tr>
    <tr>
      <td>Hearing</td>
      <td>Gehoor</td>
      <td>hɔrɑ</td>
    </tr>
    <tr>
      <td>Smell</td>
      <td>Reuk</td>
      <td>rukɑ</td>
    </tr>
    <tr>
      <td>Taste</td>
      <td>Smaak</td>
      <td>tэsɑ</td>
    </tr>
    <tr>
      <td>Touch</td>
      <td>Tast</td>
      <td>tσȿɑ</td>
    </tr>
  </tbody>
</table>

### Colors

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Color</td>
      <td>Kleur</td>
      <td>kɔʟɔr</td>
    </tr>
    <tr>
      <td>White</td>
      <td>Wit</td>
      <td>ʟide</td>
    </tr>
    <tr>
      <td>Black</td>
      <td>Zwart</td>
      <td>omʌȿ</td>
    </tr>
    <tr>
      <td>Grey</td>
      <td>Grijs</td>
      <td>ʟidʌȿ</td>
    </tr>
    <tr>
      <td>Light</td>
      <td>Licht</td>
      <td>sɔʟɑ</td>
    </tr>
    <tr>
      <td>Dark</td>
      <td>Donker</td>
      <td>mэrɑ</td>
    </tr>
    <tr>
      <td>Red</td>
      <td>Rood</td>
      <td>rɔȿ</td>
    </tr>
    <tr>
      <td>Yellow</td>
      <td>Geel</td>
      <td>ɥэʟoω</td>
    </tr>
    <tr>
      <td>Blue</td>
      <td>Blauw</td>
      <td>ʟθω</td>
    </tr>
    <tr>
      <td>Oranje</td>
      <td>Orange</td>
      <td>orɑn</td>
    </tr>
    <tr>
      <td>Green</td>
      <td>Groen</td>
      <td>rθn</td>
    </tr>
    <tr>
      <td>Purple</td>
      <td>Paars</td>
      <td>pэrɑ</td>
    </tr>
    <tr>
      <td>Pink</td>
      <td>Roze</td>
      <td>nэnɑ</td>
    </tr>
    <tr>
      <td>Shiny</td>
      <td>Glimmend</td>
      <td>ȿin</td>
    </tr>
  </tbody>
</table>

It is possible to derive colors by combining them. Here is a non-exhaustive list
of examples:

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Turquoise</td>
      <td>Turkoois</td>
      <td>ʟθω-rθn</td>
    </tr>
    <tr>
      <td>Light blue</td>
      <td>Lichtblauω</td>
      <td>sɔʟɑ-ʟθω</td>
    </tr>
    <tr>
      <td>Brown (aka dark orange)</td>
      <td>Bruin (aka donkeroranje)</td>
      <td>mэrɑ-orɑn</td>
    </tr>
    <tr>
      <td>Gold</td>
      <td>Goud</td>
      <td>ȿin-ɥэʟoω</td>
    </tr>
    <tr>
      <td>Silver</td>
      <td>Zilver</td>
      <td>ȿin-ʟidʌȿ</td>
    </tr>
    <tr>
      <td>Bronze</td>
      <td>Brons</td>
      <td>ȿin-orɑn</td>
    </tr>
  </tbody>
</table>

(These are compounds, hence the hyphen :)

### Family

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Family</td>
      <td>Familie</td>
      <td>fʌmʟy</td>
    </tr>
    <tr>
      <td>Brother</td>
      <td>Broer</td>
      <td>nybo</td>
    </tr>
    <tr>
      <td>Sister</td>
      <td>Zus</td>
      <td>sis</td>
    </tr>
    <tr>
      <td>Sibling</td>
      <td>-</td>
      <td>sinyno</td>
    </tr>
    <tr>
      <td>Mother, mom</td>
      <td>Moeder, mama</td>
      <td>ʌmɑ</td>
    </tr>
    <tr>
      <td>Father, dad</td>
      <td>Vader, papa</td>
      <td>ɑdɑ</td>
    </tr>
    <tr>
      <td>Parent</td>
      <td>Ouder</td>
      <td>udэrɑ</td>
    </tr>
    <tr>
      <td>Grandma</td>
      <td>Oma</td>
      <td>omɑ</td>
    </tr>
    <tr>
      <td>Grandpa</td>
      <td>Opa</td>
      <td>odɑ</td>
    </tr>
    <tr>
      <td>Grandparent</td>
      <td>Grootouder</td>
      <td>odudэrɑ</td>
    </tr>
    <tr>
      <td>Daughter</td>
      <td>Dochter</td>
      <td>dotɑ</td>
    </tr>
    <tr>
      <td>Son</td>
      <td>Zoon</td>
      <td>sono</td>
    </tr>
    <tr>
      <td>Child</td>
      <td>Kind</td>
      <td>sydo</td>
    </tr>
    <tr>
      <td>Wife</td>
      <td>Vrouw</td>
      <td>mun Σmɑ</td>
    </tr>
    <tr>
      <td>Husband</td>
      <td>Man</td>
      <td>mun Σmy</td>
    </tr>
    <tr>
      <td>Fiance</td>
      <td>Verloofde</td>
      <td colspan="1" rowspan="4">xiku</td>
    </tr>
    <tr>
      <td>Partner</td>
      <td>Partner</td>
    </tr>
    <tr>
      <td>Girlfriend</td>
      <td>Vriendinnetje</td>
    </tr>
    <tr>
      <td>Boyfriend</td>
      <td>Vriendje</td>
    </tr>
    <tr>
      <td>Far-</td>
      <td>Achter-</td>
      <td>hin-</td>
    </tr>
    <tr>
      <td>Step-</td>
      <td>Stief-</td>
      <td>tyf-</td>
    </tr>
    <tr>
      <td>Aunt</td>
      <td>Tante</td>
      <td>hin-ʌmɑ</td>
    </tr>
    <tr>
      <td>Uncle</td>
      <td>Oom</td>
      <td>hin-ɑdɑ</td>
    </tr>
    <tr>
      <td>(gender neutral)</td>
      <td>(genderneutraal)</td>
      <td>hin-uderɑ</td>
    </tr>
    <tr>
      <td>Niece</td>
      <td>Nicht</td>
      <td>hin-sis</td>
    </tr>
    <tr>
      <td>Nephew</td>
      <td>Neef</td>
      <td>hin-nybo</td>
    </tr>
    <tr>
      <td>Cousin</td>
      <td>(genderneutraal)</td>
      <td>hin-sinyno</td>
    </tr>
  </tbody>
</table>

Note about in-laws (schoon- in Dutch): they are utterly confusing. Just say
what you mean. 'My girlfriend's parents' is so much clearer
than 'parents in-law' or whatever. Also, what the actual f*ck does
'zwager' mean?? Same goes for step- etc.

### People

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Baby</td>
      <td>Baby</td>
      <td>ʟiʟ-kido</td>
    </tr>
    <tr>
      <td>Child</td>
      <td>Kind</td>
      <td>kido</td>
    </tr>
    <tr>
      <td>Teenager</td>
      <td>Tiener</td>
      <td>dyno</td>
    </tr>
    <tr>
      <td>Adult</td>
      <td>Volwassene</td>
      <td>ɑdo</td>
    </tr>
    <tr>
      <td>Friend</td>
      <td>Vriend(in)</td>
      <td>ɑmy</td>
    </tr>
    <tr>
      <td>Enemy</td>
      <td>Vijand</td>
      <td>σnomy</td>
    </tr>
    <tr>
      <td>Attacker, abuser</td>
      <td>Aanvaller, misbruiker</td>
      <td>σωer</td>
    </tr>
    <tr>
      <td>Victim</td>
      <td>Slachtoffer</td>
      <td>σωy</td>
    </tr>
    <tr>
      <td>Witness</td>
      <td>Toeschouwer</td>
      <td>vyser</td>
    </tr>
    <tr>
      <td>Defender, protector</td>
      <td>Verdediger</td>
      <td>potэker</td>
    </tr>
    <tr>
      <td>Player</td>
      <td>Speler</td>
      <td>toɥer</td>
    </tr>
    <tr>
      <td>Fan</td>
      <td>Fan</td>
      <td>fæn</td>
    </tr>
    <tr>
      <td>Crowd</td>
      <td>Menigte</td>
      <td>Σmʌndin</td>
    </tr>
    <tr>
      <td>Team</td>
      <td>Team</td>
      <td>toɥers</td>
    </tr>
    <tr>
      <td>Teammate</td>
      <td>Teamgenoot</td>
      <td>toɥ-ɑmy</td>
    </tr>
    <tr>
      <td>President</td>
      <td>President/premiër</td>
      <td>impo-bɔser</td>
    </tr>
    <tr>
      <td>Teacher</td>
      <td>Docent/leraar</td>
      <td>tyxer</td>
    </tr>
    <tr>
      <td>Student</td>
      <td>Student</td>
      <td>tyxy</td>
    </tr>
    <tr>
      <td>Pupil</td>
      <td>Leerling</td>
      <td>ʟλrer</td>
    </tr>
    <tr>
      <td>Classmate</td>
      <td>Klasgenoot</td>
      <td>kɑlʌs-ɑmy</td>
    </tr>
    <tr>
      <td>Lawyer</td>
      <td>Advocaat</td>
      <td>ʟʌω-potэker</td>
    </tr>
    <tr>
      <td>Patient</td>
      <td>Patient</td>
      <td>rλsʌnty</td>
    </tr>
    <tr>
      <td>Waiter, server</td>
      <td>Ober, serveerder</td>
      <td>эskɑ-giver</td>
    </tr>
    <tr>
      <td>Priest, preacher</td>
      <td>Priester, dominee, predikant</td>
      <td colspan="1" rowspan="2">ɥohʌner</td>
    </tr>
    <tr>
      <td>Philosopher</td>
      <td>Filosoof</td>
    </tr>
    <tr>
      <td>Police (officer)</td>
      <td>Politie(agent)</td>
      <td>poʟyser</td>
    </tr>
    <tr>
      <td>Firefighter</td>
      <td>Brandweerman</td>
      <td>fΣrσωer</td>
    </tr>
    <tr>
      <td>Doctor</td>
      <td>Dokter</td>
      <td>mэdiker</td>
    </tr>
    <tr>
      <td>Artist</td>
      <td>Artiest</td>
      <td>mλker</td>
    </tr>
    <tr>
      <td>Employer</td>
      <td>Werkgever</td>
      <td>ωσk-giver</td>
    </tr>
    <tr>
      <td>Employee</td>
      <td>Werknemer</td>
      <td>ωσk-givee, ωσk-nλmer</td>
    </tr>
    <tr>
      <td>Employee</td>
      <td>Medewerker</td>
      <td>ωσker</td>
    </tr>
    <tr>
      <td>Boss</td>
      <td>Baas</td>
      <td>bɔser</td>
    </tr>
    <tr>
      <td>Peasant</td>
      <td>Onderdaan, boerenpummel</td>
      <td>bɔsy</td>
    </tr>
    <tr>
      <td>Vampire</td>
      <td>Vampier</td>
      <td>væmpir</td>
    </tr>
    <tr>
      <td>Reporter</td>
      <td>Verslaggever</td>
      <td colspan="1" rowspan="2">rypoter</td>
    </tr>
    <tr>
      <td>Journalist</td>
      <td>Journalist</td>
    </tr>
    <tr>
      <td>Poet</td>
      <td>Dichter</td>
      <td>poet</td>
    </tr>
  </tbody>
</table>

### Body

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Body</td>
      <td>Lichaam</td>
      <td>bɔdy</td>
    </tr>
    <tr>
      <td>Head</td>
      <td>Hoofd</td>
      <td>hæd</td>
    </tr>
    <tr>
      <td>Brain/mind</td>
      <td>Brein</td>
      <td>mΣnde</td>
    </tr>
    <tr>
      <td>Face</td>
      <td>Gezicht</td>
      <td>fλsu</td>
    </tr>
    <tr>
      <td>Neck</td>
      <td>Nek</td>
      <td>nэk</td>
    </tr>
    <tr>
      <td>Beard</td>
      <td>Baard</td>
      <td>bærdo</td>
    </tr>
    <tr>
      <td>Stomach</td>
      <td>Buik</td>
      <td>buk</td>
    </tr>
    <tr>
      <td>Arm</td>
      <td>Arm</td>
      <td>ʌrme</td>
    </tr>
    <tr>
      <td>Shoulder</td>
      <td>Schouder</td>
      <td>ȿɔʟdɑ</td>
    </tr>
    <tr>
      <td>Leg</td>
      <td>Been</td>
      <td>bλne</td>
    </tr>
    <tr>
      <td>Knee</td>
      <td>Knie</td>
      <td>ny</td>
    </tr>
    <tr>
      <td>Eye</td>
      <td>Oog</td>
      <td>oku</td>
    </tr>
    <tr>
      <td>Tear</td>
      <td>Traan</td>
      <td>kyrɑkωɑ</td>
    </tr>
    <tr>
      <td>Mouth</td>
      <td>Mond</td>
      <td>ɔro</td>
    </tr>
    <tr>
      <td>Lip</td>
      <td>Lip</td>
      <td>ʟip</td>
    </tr>
    <tr>
      <td>Tongue</td>
      <td>Tong</td>
      <td>tɔnge</td>
    </tr>
    <tr>
      <td>Nose</td>
      <td>Neus</td>
      <td>nλs</td>
    </tr>
    <tr>
      <td>Ear</td>
      <td>Oor</td>
      <td>σro</td>
    </tr>
    <tr>
      <td>Hair</td>
      <td>Haar</td>
      <td>ωig</td>
    </tr>
    <tr>
      <td>Hand</td>
      <td>Hand</td>
      <td>hʌnde</td>
    </tr>
    <tr>
      <td>Foot</td>
      <td>Voet</td>
      <td>fθte</td>
    </tr>
    <tr>
      <td>Finger</td>
      <td>Vinger</td>
      <td>finge</td>
    </tr>
    <tr>
      <td>Toe</td>
      <td>Teen</td>
      <td>tθne</td>
    </tr>
    <tr>
      <td>Nail</td>
      <td>Nagel</td>
      <td>nλgeʟ</td>
    </tr>
    <tr>
      <td>Tooth</td>
      <td>Tand</td>
      <td>dэn</td>
    </tr>
    <tr>
      <td>Heart</td>
      <td>Hart</td>
      <td>kʌrdu</td>
    </tr>
    <tr>
      <td>Blood</td>
      <td>Bloed</td>
      <td>vʌsku</td>
    </tr>
    <tr>
      <td>Sweat</td>
      <td>Zweet</td>
      <td>sʌωɑku</td>
    </tr>
    <tr>
      <td>Bone</td>
      <td>Bot</td>
      <td>bone</td>
    </tr>
    <tr>
      <td>Muscle</td>
      <td>Spier</td>
      <td>mesku</td>
    </tr>
    <tr>
      <td>Voice</td>
      <td>Stem</td>
      <td>vokɑ</td>
    </tr>
    <tr>
      <td>Skin</td>
      <td>Huid</td>
      <td>pэʟis</td>
    </tr>
    <tr>
      <td>Wing</td>
      <td>Vleugel</td>
      <td>fugэʟ</td>
    </tr>
  </tbody>
</table>

### Materials

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Wood</td>
      <td>Hout</td>
      <td>ωot</td>
    </tr>
    <tr>
      <td>Paper</td>
      <td>Papier</td>
      <td>pɑpyres</td>
    </tr>
    <tr>
      <td>Glass</td>
      <td>Glas</td>
      <td>vytro</td>
    </tr>
    <tr>
      <td>Earth</td>
      <td>Aarde</td>
      <td>эrde</td>
    </tr>
    <tr>
      <td>Lead</td>
      <td>Lood</td>
      <td>ʟэd</td>
    </tr>
  </tbody>
</table>

### Animals

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Animal</td>
      <td>Dier</td>
      <td>tyr</td>
    </tr>
    <tr>
      <td>Pig</td>
      <td>Varken</td>
      <td>nɔr</td>
    </tr>
    <tr>
      <td>Cow</td>
      <td>Koe</td>
      <td>mθ</td>
    </tr>
    <tr>
      <td>Horse</td>
      <td>Paard</td>
      <td>ɔs</td>
    </tr>
    <tr>
      <td>Cat</td>
      <td>Kat</td>
      <td>mσ</td>
    </tr>
    <tr>
      <td>Dog</td>
      <td>Hond</td>
      <td>ωθf</td>
    </tr>
    <tr>
      <td>Donkey</td>
      <td>Ezel</td>
      <td>dɔnkλ</td>
    </tr>
    <tr>
      <td>Chicken</td>
      <td>Kip</td>
      <td colspan="1" rowspan="2">tɔk</td>
    </tr>
    <tr>
      <td>Rooster</td>
      <td>Haan</td>
    </tr>
    <tr>
      <td>Giraffe</td>
      <td>Giraffe</td>
      <td>rʌfλ</td>
    </tr>
    <tr>
      <td>Elephant</td>
      <td>Olifant</td>
      <td>ɔʟy</td>
    </tr>
    <tr>
      <td>Lion</td>
      <td>Leeuw</td>
      <td>ʟyɔn</td>
    </tr>
    <tr>
      <td>Tiger</td>
      <td>Tijger</td>
      <td>tΣger</td>
    </tr>
    <tr>
      <td>Hippo</td>
      <td>Nijlpaard</td>
      <td>hipo</td>
    </tr>
    <tr>
      <td>Fish</td>
      <td>Vis</td>
      <td>obʟib</td>
    </tr>
    <tr>
      <td>Shark</td>
      <td>Haai</td>
      <td>ȿɑk</td>
    </tr>
    <tr>
      <td>Duck</td>
      <td>Eend</td>
      <td>duken</td>
    </tr>
    <tr>
      <td>Fly</td>
      <td>Vlieg</td>
      <td>fʟugy</td>
    </tr>
    <tr>
      <td>Frog</td>
      <td>Kikker</td>
      <td>fɔger</td>
    </tr>
    <tr>
      <td>Mouse</td>
      <td>Muis</td>
      <td>mus</td>
    </tr>
    <tr>
      <td>Monkey</td>
      <td>Aap</td>
      <td>mɔnkλ</td>
    </tr>
    <tr>
      <td>Bird</td>
      <td>Vogel</td>
      <td>birden</td>
    </tr>
    <tr>
      <td>Cockroach</td>
      <td>Kakkerlak</td>
      <td>kukɑrɑxɑ</td>
    </tr>
  </tbody>
</table>

### Clothing

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Clothes, clothing</td>
      <td>Kleding(stuk)</td>
      <td colspan="1" rowspan="2">vэstθ</td>
    </tr>
    <tr>
      <td>Dress, robe</td>
      <td>Jurk</td>
    </tr>
    <tr>
      <td>Suit</td>
      <td>Pak</td>
      <td>fænȿy-vэstθ</td>
    </tr>
    <tr>
      <td>Shirt</td>
      <td>Shirt</td>
      <td>sэtɑ</td>
    </tr>
    <tr>
      <td>Jeans/pants</td>
      <td>Broek</td>
      <td>xɑmy</td>
    </tr>
    <tr>
      <td>Shoe</td>
      <td>Schoen</td>
      <td>bθt</td>
    </tr>
    <tr>
      <td>Sock</td>
      <td>Sok</td>
      <td>sɔk</td>
    </tr>
    <tr>
      <td>Coat, jacket</td>
      <td>Jas</td>
      <td>ɥɑs</td>
    </tr>
    <tr>
      <td>Underwear</td>
      <td>Ondergoed</td>
      <td>under-vэstθ</td>
    </tr>
    <tr>
      <td>Sweater, hoody</td>
      <td>Trui</td>
      <td>hθdy</td>
    </tr>
    <tr>
      <td>Outfit</td>
      <td>Outfit</td>
      <td>xɑmysэtɑ</td>
    </tr>
  </tbody>
</table>

### Vegetables

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Vegetable</td>
      <td>Groente (enkelv.)</td>
      <td>rθnes</td>
    </tr>
    <tr>
      <td>Potato</td>
      <td>Aardappel</td>
      <td>potʌto</td>
    </tr>
    <tr>
      <td>Tomato</td>
      <td>Tomaat</td>
      <td>tomʌto</td>
    </tr>
    <tr>
      <td>Broccoli</td>
      <td>Broccoli</td>
      <td>rθn-bɔkɔʟy</td>
    </tr>
    <tr>
      <td>Cauliflower</td>
      <td>Bloemkool</td>
      <td>ʟidʌȿ-bɔkɔʟy</td>
    </tr>
    <tr>
      <td>Carrot</td>
      <td>Wortel</td>
      <td>kɑrɔt</td>
    </tr>
    <tr>
      <td>karctan</td>
      <td>Boon</td>
      <td>kэbyn</td>
    </tr>
    <tr>
      <td>Corn</td>
      <td>Mais</td>
      <td>mΣȿy</td>
    </tr>
    <tr>
      <td>Eggplant</td>
      <td>Aubergine</td>
      <td colspan="1" rowspan="2">Σgpyʌntɑ</td>
    </tr>
    <tr>
      <td>Courgette</td>
      <td>Courgette</td>
    </tr>
    <tr>
      <td>Cucumber</td>
      <td>Komkommer</td>
      <td>kθmkθmer</td>
    </tr>
    <tr>
      <td>Garlic</td>
      <td>Knoflook</td>
      <td>gɑʟik</td>
    </tr>
    <tr>
      <td>Advocado</td>
      <td>Advocado</td>
      <td>ʌdvokɑdo</td>
    </tr>
  </tbody>
</table>

### Fruits

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Fruit</td>
      <td>Fruit (enkelv.)</td>
      <td>rɔȿes</td>
    </tr>
    <tr>
      <td>Apple</td>
      <td>Appel</td>
      <td>æpeʟ</td>
    </tr>
    <tr>
      <td>Banana</td>
      <td>Banaan</td>
      <td>bɑnɑnɑ</td>
    </tr>
    <tr>
      <td>Pear</td>
      <td>Peer</td>
      <td>pir</td>
    </tr>
    <tr>
      <td>Grape</td>
      <td>Druif</td>
      <td>duf</td>
    </tr>
    <tr>
      <td>Berry</td>
      <td>Bes</td>
      <td>bэr</td>
    </tr>
    <tr>
      <td>Strawberry</td>
      <td>Aardbei</td>
      <td>rɔȿ-bэr</td>
    </tr>
    <tr>
      <td>Blueberry</td>
      <td>Bosbes</td>
      <td>pэrɑ-bэr</td>
    </tr>
    <tr>
      <td>Mandarine</td>
      <td>Mandarijn</td>
      <td colspan="1" rowspan="2">orɑn-bэr</td>
    </tr>
    <tr>
      <td>Orange</td>
      <td>Sinaasappel</td>
    </tr>
    <tr>
      <td>Lemon</td>
      <td>Citroen</td>
      <td>ɥэʟow-bэr</td>
    </tr>
    <tr>
      <td>Lime</td>
      <td>Limoen</td>
      <td>rθn-bэr</td>
    </tr>
    <tr>
      <td>Pineapple</td>
      <td>Ananas</td>
      <td>ʌnɑnʌs</td>
    </tr>
  </tbody>
</table>

### Drinks

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Drink</td>
      <td>Drinken (enkelv.)</td>
      <td>dinke</td>
    </tr>
    <tr>
      <td>Water</td>
      <td>Water</td>
      <td>ɑkωɑ</td>
    </tr>
    <tr>
      <td>Milk</td>
      <td>Melk</td>
      <td>ʟʌkto</td>
    </tr>
    <tr>
      <td>Coffee</td>
      <td>Koffie</td>
      <td>kɔfλ</td>
    </tr>
    <tr>
      <td>Tea</td>
      <td>Thee</td>
      <td>ty</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>Frisdrank</td>
      <td>sukrλ-dinke</td>
    </tr>
    <tr>
      <td>Hot chocolate</td>
      <td>Chocolademelk</td>
      <td>xokoʟɑ-ʟʌkto</td>
    </tr>
    <tr>
      <td>(Alcoholic) drink</td>
      <td>(Alcoholhoudende) drank</td>
      <td>ɑʟko-dinke</td>
    </tr>
    <tr>
      <td>Cocktail</td>
      <td>Cocktail</td>
      <td>ɑʟko-ȿɑpɥe</td>
    </tr>
    <tr>
      <td>Juice</td>
      <td>Sap</td>
      <td>ȿɑpɥe</td>
    </tr>
  </tbody>
</table>

### Tastes

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sweet</td>
      <td>Zoet</td>
      <td>suto</td>
    </tr>
    <tr>
      <td>Salty</td>
      <td>Zout</td>
      <td>sσto</td>
    </tr>
    <tr>
      <td>Sour</td>
      <td>Zuur</td>
      <td>sσro</td>
    </tr>
    <tr>
      <td>Bitter</td>
      <td>Bitter</td>
      <td>bitɑ</td>
    </tr>
    <tr>
      <td>Spicy</td>
      <td>Heet/pittig</td>
      <td>hæt</td>
    </tr>
  </tbody>
</table>

### Cutlery

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Knife</td>
      <td>Mes</td>
      <td>poker</td>
    </tr>
    <tr>
      <td>Fork</td>
      <td>Vork</td>
      <td>fɔk</td>
    </tr>
    <tr>
      <td>Spoon</td>
      <td>Lepel</td>
      <td>espun</td>
    </tr>
    <tr>
      <td>Plate</td>
      <td>Bord</td>
      <td>pɑto</td>
    </tr>
    <tr>
      <td>Cup</td>
      <td>Beker</td>
      <td>kɔpy</td>
    </tr>
    <tr>
      <td>Bottle</td>
      <td>Fles</td>
      <td>budeʟ</td>
    </tr>
  </tbody>
</table>

### Miscellaneous food

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Food</td>
      <td>Eten</td>
      <td>эskɑ</td>
    </tr>
    <tr>
      <td>Candy</td>
      <td>Snoep (enkelv.)</td>
      <td>kænty</td>
    </tr>
    <tr>
      <td>Meat</td>
      <td>Vlees</td>
      <td>vyɑnde</td>
    </tr>
    <tr>
      <td>Breakfast</td>
      <td>Ontbijt</td>
      <td>kɔmo-эskɑ</td>
    </tr>
    <tr>
      <td>Lunch</td>
      <td>Lunch</td>
      <td>mid-эskɑ</td>
    </tr>
    <tr>
      <td>Dinner</td>
      <td>Avondeten</td>
      <td>omэskɑ (contr. of omэr+eskɑ)</td>
    </tr>
    <tr>
      <td>Dish</td>
      <td>Gerecht/maaltijd</td>
      <td>эskɑko</td>
    </tr>
    <tr>
      <td>Rice</td>
      <td>Rijst</td>
      <td>rΣs</td>
    </tr>
    <tr>
      <td>Soup</td>
      <td>Soep</td>
      <td>sθp</td>
    </tr>
    <tr>
      <td>Salad</td>
      <td>Salade</td>
      <td>sʌʟɑdem</td>
    </tr>
    <tr>
      <td>Bread</td>
      <td>Brood</td>
      <td>pæn</td>
    </tr>
    <tr>
      <td>Sugar</td>
      <td>Suiker</td>
      <td>sukrλ</td>
    </tr>
    <tr>
      <td>Salt</td>
      <td>Zout</td>
      <td>sэʟ</td>
    </tr>
    <tr>
      <td>Pepper</td>
      <td>Peper</td>
      <td>pэpэr</td>
    </tr>
    <tr>
      <td>Cheese</td>
      <td>Kaas</td>
      <td>fɔrmɑgy</td>
    </tr>
    <tr>
      <td>Egg</td>
      <td>Ei</td>
      <td>Σg</td>
    </tr>
    <tr>
      <td>Cookie</td>
      <td>Koekje</td>
      <td>bisky</td>
    </tr>
    <tr>
      <td>Pancakes</td>
      <td>Pannekoeken</td>
      <td>pʌnkλky</td>
    </tr>
    <tr>
      <td>Chocolate</td>
      <td>Chocolade</td>
      <td>xokoʟɑ</td>
    </tr>
    <tr>
      <td>Icecream</td>
      <td>IJs</td>
      <td>sukrэm</td>
    </tr>
    <tr>
      <td>Waffle</td>
      <td>Wafel</td>
      <td>rɔbin</td>
    </tr>
    <tr>
      <td>Donut</td>
      <td>Donut</td>
      <td>donet</td>
    </tr>
    <tr>
      <td>Cake</td>
      <td>Taart, cake</td>
      <td>kλky</td>
    </tr>
    <tr>
      <td>Fries</td>
      <td>Patat, friet</td>
      <td>pʌtʌt</td>
    </tr>
    <tr>
      <td>Burger</td>
      <td>Burger</td>
      <td>burber</td>
    </tr>
  </tbody>
</table>

### Nature

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nature</td>
      <td>Natuur</td>
      <td>nɑtu</td>
    </tr>
    <tr>
      <td>World</td>
      <td>Wereld</td>
      <td colspan="1" rowspan="2">ωθd</td>
    </tr>
    <tr>
      <td>Earth</td>
      <td>Aarde</td>
    </tr>
    <tr>
      <td>Tree</td>
      <td>Boom</td>
      <td>bom</td>
    </tr>
    <tr>
      <td>Forest</td>
      <td>Bos</td>
      <td>bomdin</td>
    </tr>
    <tr>
      <td>Root</td>
      <td>Wortel</td>
      <td>rθt</td>
    </tr>
    <tr>
      <td>Sun</td>
      <td>Zon</td>
      <td>sɔʟ</td>
    </tr>
    <tr>
      <td>Moon</td>
      <td>Maan</td>
      <td>ʟθn</td>
    </tr>
    <tr>
      <td>Wet</td>
      <td>Nat</td>
      <td>nλɥo</td>
    </tr>
    <tr>
      <td>Dry</td>
      <td>Droog</td>
      <td>rλɥo</td>
    </tr>
    <tr>
      <td>Sky</td>
      <td>Lucht</td>
      <td colspan="1" rowspan="2">æro</td>
    </tr>
    <tr>
      <td>Air</td>
      <td>Lucht</td>
    </tr>
    <tr>
      <td>Wind</td>
      <td>Wind</td>
      <td>vэntu</td>
    </tr>
    <tr>
      <td>Fire</td>
      <td>Vuur</td>
      <td>fΣr</td>
    </tr>
    <tr>
      <td>Plant</td>
      <td>Plant</td>
      <td>pyʌntɑ</td>
    </tr>
    <tr>
      <td>Flower</td>
      <td>Bloem</td>
      <td>fyʟɔrɑ</td>
    </tr>
    <tr>
      <td>Grass</td>
      <td>Gras</td>
      <td>gyrɑsɑ</td>
    </tr>
    <tr>
      <td>Sand</td>
      <td>Zand</td>
      <td>sæn</td>
    </tr>
    <tr>
      <td>Dirt</td>
      <td>Aarde/grond</td>
      <td>humus</td>
    </tr>
    <tr>
      <td>Water</td>
      <td>Water</td>
      <td>ɑkωɑ</td>
    </tr>
    <tr>
      <td>Desert</td>
      <td>Woestijn</td>
      <td>sændin</td>
    </tr>
    <tr>
      <td>Beach</td>
      <td>Strand</td>
      <td>sænɑkωɑ</td>
    </tr>
    <tr>
      <td>Sea</td>
      <td>Zee</td>
      <td colspan="1" rowspan="4">(= body of water) ɑkωɑdin</td>
    </tr>
    <tr>
      <td>Ocean</td>
      <td>Oceaan</td>
    </tr>
    <tr>
      <td>Lake</td>
      <td>Meer</td>
    </tr>
    <tr>
      <td>River</td>
      <td>Rivier</td>
    </tr>
    <tr>
      <td>Rain</td>
      <td>Regen</td>
      <td>ɑkωɑdσω</td>
    </tr>
    <tr>
      <td>Wave</td>
      <td>Golf</td>
      <td>ωλve</td>
    </tr>
    <tr>
      <td>Ice</td>
      <td>IJs</td>
      <td>Σs</td>
    </tr>
    <tr>
      <td>Heat/warmth</td>
      <td>Warm</td>
      <td>ωɑm</td>
    </tr>
    <tr>
      <td>Cold</td>
      <td>Koud</td>
      <td>neωɑm</td>
    </tr>
    <tr>
      <td>Hill</td>
      <td>Heuvel</td>
      <td>ʟiʟ-mσtэn</td>
    </tr>
    <tr>
      <td>Mountain</td>
      <td>Berg</td>
      <td>mσtэn</td>
    </tr>
    <tr>
      <td>Valley</td>
      <td>Vallei</td>
      <td>væʟis</td>
    </tr>
    <tr>
      <td>Star</td>
      <td>Ster</td>
      <td>ʟiʟ-sɔʟ</td>
    </tr>
    <tr>
      <td>Snow</td>
      <td>Sneeuw</td>
      <td>эsno</td>
    </tr>
  </tbody>
</table>

### Society

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Religion</td>
      <td>Religie</td>
      <td>beʟyfɑ</td>
    </tr>
    <tr>
      <td>Afterlife</td>
      <td>Hiernamaals</td>
      <td>ɑnde-dod</td>
    </tr>
    <tr>
      <td>Medicine</td>
      <td>Medicijn</td>
      <td>medixin</td>
    </tr>
    <tr>
      <td>Drug</td>
      <td>Drug</td>
      <td>эdrɔgɑ</td>
    </tr>
    <tr>
      <td>Money</td>
      <td>Geld</td>
      <td>mɔny</td>
    </tr>
    <tr>
      <td>Currency</td>
      <td>Munteenheid</td>
      <td>kerэnsy</td>
    </tr>
    <tr>
      <td>Bill</td>
      <td>Rekening</td>
      <td>biʟ</td>
    </tr>
    <tr>
      <td>Price</td>
      <td>Prijs</td>
      <td>kɔstэ</td>
    </tr>
    <tr>
      <td>Contract</td>
      <td>Contract</td>
      <td>kontʌktus</td>
    </tr>
    <tr>
      <td>Marriage</td>
      <td>Huwelijk</td>
      <td colspan="1" rowspan="2">hΣrɑt</td>
    </tr>
    <tr>
      <td>Wedding</td>
      <td>Bruiloft</td>
    </tr>
    <tr>
      <td>Relationship</td>
      <td>Relatie</td>
      <td>kɔnэkto</td>
    </tr>
    <tr>
      <td>Ethnicity</td>
      <td>Etniciteit</td>
      <td>эtnike</td>
    </tr>
    <tr>
      <td>Sex</td>
      <td>Seks</td>
      <td>seksa</td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>Gender</td>
      <td>xэndэr</td>
    </tr>
    <tr>
      <td>Murder</td>
      <td>Moord</td>
      <td>homosyde</td>
    </tr>
    <tr>
      <td>Crime</td>
      <td>Misdaad</td>
      <td>fθɥ</td>
    </tr>
    <tr>
      <td>Prison</td>
      <td>Gevangenis</td>
      <td>fθɥ-bσωɑ</td>
    </tr>
    <tr>
      <td>Gun</td>
      <td>Geweer</td>
      <td>pistɔʟ</td>
    </tr>
    <tr>
      <td>News</td>
      <td>Nieuws</td>
      <td>ɥunos, rypot</td>
    </tr>
    <tr>
      <td>Technology</td>
      <td>Technologie</td>
      <td>tekno</td>
    </tr>
    <tr>
      <td>Energy</td>
      <td>Energie</td>
      <td>эnэrxy</td>
    </tr>
    <tr>
      <td>War</td>
      <td>Oorlog</td>
      <td>ωʌr</td>
    </tr>
    <tr>
      <td>Peace</td>
      <td>Vrede</td>
      <td>pys</td>
    </tr>
    <tr>
      <td>Military</td>
      <td>Militair</td>
      <td>miʟytэr</td>
    </tr>
    <tr>
      <td>Game</td>
      <td>Spel</td>
      <td>ludo</td>
    </tr>
    <tr>
      <td>Ball</td>
      <td>Bal</td>
      <td>bʌʟ</td>
    </tr>
    <tr>
      <td>Science</td>
      <td>Wetenschap</td>
      <td>syэnse</td>
    </tr>
    <tr>
      <td>Sign</td>
      <td>Bord</td>
      <td>signe</td>
    </tr>
    <tr>
      <td>Magazine</td>
      <td>Tijdschrift</td>
      <td>mɑgɑsyn</td>
    </tr>
    <tr>
      <td>Election</td>
      <td>Verkiezing</td>
      <td>impo-ȿɑsyra</td>
    </tr>
    <tr>
      <td>Race</td>
      <td>Race</td>
      <td>rλs</td>
    </tr>
    <tr>
      <td>Law</td>
      <td>Wet</td>
      <td>ʟʌω</td>
    </tr>
  </tbody>
</table>

### Verbs

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>To be</td>
      <td>Zijn</td>
      <td>ʌr-</td>
    </tr>
    <tr>
      <td>To have</td>
      <td>Hebben</td>
      <td>hэb-</td>
    </tr>
    <tr>
      <td>To become</td>
      <td>Worden</td>
      <td>(= to be in the future, so ʌrɔ...)</td>
    </tr>
    <tr>
      <td>To be allowed to</td>
      <td>Mogen</td>
      <td>pθv-</td>
    </tr>
    <tr>
      <td>To be able / can</td>
      <td>Kunnen</td>
      <td>kэn-</td>
    </tr>
    <tr>
      <td>To have to</td>
      <td>Moeten</td>
      <td>mus-</td>
    </tr>
    <tr>
      <td>Should</td>
      <td>Zouden moeten</td>
      <td>ȿθd-</td>
    </tr>
    <tr>
      <td>Will / shall / to be going to</td>
      <td>Zullen</td>
      <td>ȿʌʟ-</td>
    </tr>
    <tr>
      <td>To want</td>
      <td>Willen</td>
      <td>ωɔʟ-</td>
    </tr>
    <tr>
      <td>To show</td>
      <td>Laten zien</td>
      <td>ȿoω-</td>
    </tr>
    <tr>
      <td>To make, to create, to construct</td>
      <td>Maken</td>
      <td>mλk-</td>
    </tr>
    <tr>
      <td>To do</td>
      <td>Doen</td>
      <td>tθn-</td>
    </tr>
    <tr>
      <td>To use</td>
      <td>Gebruiken</td>
      <td>ɥθs-</td>
    </tr>
    <tr>
      <td>To happen</td>
      <td>Gebeuren</td>
      <td>hэp-</td>
    </tr>
    <tr>
      <td>To move</td>
      <td>Bewegen</td>
      <td>vyd-</td>
    </tr>
    <tr>
      <td>To travel</td>
      <td>Reizen</td>
      <td>voɥɑv-</td>
    </tr>
    <tr>
      <td>To wait</td>
      <td>Wachten</td>
      <td>ωλd-</td>
    </tr>
    <tr>
      <td>To resemble</td>
      <td>Lijken (op)</td>
      <td>ʟyk-</td>
    </tr>
    <tr>
      <td>To work</td>
      <td>Werken</td>
      <td>ωσk-</td>
    </tr>
    <tr>
      <td>To like</td>
      <td>Leuk vinden</td>
      <td>ʟΣk-</td>
    </tr>
    <tr>
      <td>To love</td>
      <td>Houden van</td>
      <td>ʟuv-</td>
    </tr>
    <tr>
      <td>To miss</td>
      <td>Missen</td>
      <td>mys-</td>
    </tr>
    <tr>
      <td>To joke</td>
      <td>Grappen maken</td>
      <td>ɥuk-</td>
    </tr>
    <tr>
      <td>To care</td>
      <td>Geven om, belangrijk vinden</td>
      <td>kær-</td>
    </tr>
    <tr>
      <td>To think</td>
      <td>Denken, vinden</td>
      <td>pэn-</td>
    </tr>
    <tr>
      <td>To find</td>
      <td>Vinden</td>
      <td>find-</td>
    </tr>
    <tr>
      <td>To lose</td>
      <td>Verliezen</td>
      <td>ʟθs-</td>
    </tr>
    <tr>
      <td>To rediscover</td>
      <td>Terugvinden</td>
      <td>rλfind-, rλdiskɔv-</td>
    </tr>
    <tr>
      <td>To see/watch</td>
      <td>Zien, kijken</td>
      <td>vys-</td>
    </tr>
    <tr>
      <td>To hear</td>
      <td>Horen</td>
      <td>hɔr-</td>
    </tr>
    <tr>
      <td>To smell</td>
      <td>Ruiken</td>
      <td>ruk-</td>
    </tr>
    <tr>
      <td>To taste</td>
      <td>Proeven</td>
      <td>tэs-</td>
    </tr>
    <tr>
      <td>To touch</td>
      <td>Aanraken/betasten</td>
      <td>tσȿ-</td>
    </tr>
    <tr>
      <td>To say/talk</td>
      <td>Zeggen/praten</td>
      <td>sæd-</td>
    </tr>
    <tr>
      <td>To promise</td>
      <td>Beloven</td>
      <td>poremys-</td>
    </tr>
    <tr>
      <td>To listen</td>
      <td>Luisteren</td>
      <td>ʟisen-</td>
    </tr>
    <tr>
      <td>To feel</td>
      <td>Voelen</td>
      <td>sэns-</td>
    </tr>
    <tr>
      <td>To come</td>
      <td>Komen</td>
      <td>kɔm-</td>
    </tr>
    <tr>
      <td>To go (somewhere)</td>
      <td>(Heen) gaan</td>
      <td>gλh-</td>
    </tr>
    <tr>
      <td>To stay</td>
      <td>Blijven</td>
      <td>эstλh-</td>
    </tr>
    <tr>
      <td>To walk</td>
      <td>Lopen</td>
      <td>ʟσf-</td>
    </tr>
    <tr>
      <td>To run</td>
      <td>Rennen</td>
      <td>ɥytʟσf-</td>
    </tr>
    <tr>
      <td>To take</td>
      <td>Nemen</td>
      <td>nλm-</td>
    </tr>
    <tr>
      <td>To bring</td>
      <td>Brengen</td>
      <td>tэk-</td>
    </tr>
    <tr>
      <td>To thank</td>
      <td>(Be)danken</td>
      <td>xʌn-</td>
    </tr>
    <tr>
      <td>To understand</td>
      <td>Snappen</td>
      <td>ɔmpʌnd-</td>
    </tr>
    <tr>
      <td>To begin/start</td>
      <td>Beginnen</td>
      <td>kɔm-</td>
    </tr>
    <tr>
      <td>To end</td>
      <td>Eindigen/stoppen</td>
      <td>эnd-</td>
    </tr>
    <tr>
      <td>To know</td>
      <td>Weten</td>
      <td>ωis-</td>
    </tr>
    <tr>
      <td>To change</td>
      <td>Veranderen</td>
      <td>ȿʌns-</td>
    </tr>
    <tr>
      <td>To live (in general)</td>
      <td>Leven</td>
      <td>vyv-</td>
    </tr>
    <tr>
      <td>To live (in a house)</td>
      <td>Wonen</td>
      <td>hɑbyt-</td>
    </tr>
    <tr>
      <td>To sleep</td>
      <td>Slapen</td>
      <td>næp-</td>
    </tr>
    <tr>
      <td>To ask</td>
      <td>Vragen</td>
      <td>fʌr-</td>
    </tr>
    <tr>
      <td>To answer</td>
      <td>(Be)antwoorden</td>
      <td>pʌr-</td>
    </tr>
    <tr>
      <td>To act</td>
      <td>Handelen</td>
      <td>ʌkt-</td>
    </tr>
    <tr>
      <td>To react</td>
      <td>Reageren</td>
      <td>rλʌkt-</td>
    </tr>
    <tr>
      <td>To give/bring (to)</td>
      <td>Geven/brengen (aan)</td>
      <td>giv-</td>
    </tr>
    <tr>
      <td>To receive</td>
      <td>Krijgen</td>
      <td>gэt-</td>
    </tr>
    <tr>
      <td>To get/fetch/summon</td>
      <td>Ophalen/(op)eisen</td>
      <td>ɑkymon-</td>
    </tr>
    <tr>
      <td>To put</td>
      <td>Plaatsen/neerleggen</td>
      <td>ʟug-</td>
    </tr>
    <tr>
      <td>To choose</td>
      <td>(Uit)kiezen</td>
      <td>ȿɑsyr-</td>
    </tr>
    <tr>
      <td>To look (for)</td>
      <td>Zoeken</td>
      <td>suk-</td>
    </tr>
    <tr>
      <td>To open</td>
      <td>Openen</td>
      <td>open-</td>
    </tr>
    <tr>
      <td>To believe</td>
      <td>Geloven</td>
      <td>beʟyf-</td>
    </tr>
    <tr>
      <td>To finish/complete</td>
      <td>Afmaken</td>
      <td>ʌp-</td>
    </tr>
    <tr>
      <td>To aggravate</td>
      <td>Boos maken</td>
      <td>ɑrɑg-</td>
    </tr>
    <tr>
      <td>To annoy</td>
      <td>Irriteren</td>
      <td>yrɑt-</td>
    </tr>
    <tr>
      <td>To frustrate</td>
      <td>Frustreren</td>
      <td>rusɑt-</td>
    </tr>
    <tr>
      <td>To make jealous</td>
      <td>Jaloers maken</td>
      <td>jɑʟon-</td>
    </tr>
    <tr>
      <td>To depress</td>
      <td>Depressiveren</td>
      <td>deprэs-</td>
    </tr>
    <tr>
      <td>To stress</td>
      <td>Stressen</td>
      <td>sэtv-</td>
    </tr>
    <tr>
      <td>To isolate</td>
      <td>Isoleren</td>
      <td>ʟon-</td>
    </tr>
    <tr>
      <td>To scare</td>
      <td>Bang maken/laten schrikken</td>
      <td>sɑkɑr-</td>
    </tr>
    <tr>
      <td>To make anxious</td>
      <td>Ongerust maken</td>
      <td>ʌxon-</td>
    </tr>
    <tr>
      <td>To make happy</td>
      <td>Blij maken</td>
      <td>bΣt-</td>
    </tr>
    <tr>
      <td>To excite</td>
      <td>Enthousiast</td>
      <td>eksyt-</td>
    </tr>
    <tr>
      <td>To calm</td>
      <td>Kalmeren</td>
      <td>kʌʟm-</td>
    </tr>
    <tr>
      <td>To validate</td>
      <td>Valideren</td>
      <td>sэkur-</td>
    </tr>
    <tr>
      <td>To disgust</td>
      <td>Tot walging brengen</td>
      <td>disgust-</td>
    </tr>
    <tr>
      <td>To embarrass</td>
      <td>In verlegenheid brengen</td>
      <td>embɑrʌs-</td>
    </tr>
    <tr>
      <td>To surprise</td>
      <td>Verrassen</td>
      <td>seprys-</td>
    </tr>
    <tr>
      <td>To admire</td>
      <td>Bewonderen</td>
      <td>ʌw-</td>
    </tr>
    <tr>
      <td>To make curious</td>
      <td>Belangstelling opwekken</td>
      <td>kur-</td>
    </tr>
    <tr>
      <td>To shield</td>
      <td>Afschermen/beschermen</td>
      <td>ʟusyn-</td>
    </tr>
    <tr>
      <td>To bore</td>
      <td>Vervelen</td>
      <td>bɔr-</td>
    </tr>
    <tr>
      <td>To tire</td>
      <td>Moe maken</td>
      <td>tΣr-</td>
    </tr>
    <tr>
      <td>To deceive (yourself)</td>
      <td>(Jezelf) om de tuin leiden</td>
      <td>deʟuʟ-</td>
    </tr>
    <tr>
      <td>To deceive (someone else)</td>
      <td>(Een ander) om de tuin leiden</td>
      <td colspan="1" rowspan="2">gæsʟΣt-</td>
    </tr>
    <tr>
      <td>To gaslight</td>
      <td>Gaslighten</td>
    </tr>
    <tr>
      <td>To bleed</td>
      <td>Bloeden</td>
      <td>vʌsk-</td>
    </tr>
    <tr>
      <td>To sweat</td>
      <td>Zweten</td>
      <td>sʌωɑk-</td>
    </tr>
    <tr>
      <td>To eat</td>
      <td>Eten</td>
      <td>эs-</td>
    </tr>
    <tr>
      <td>To cook</td>
      <td>Koken</td>
      <td>эskɑk-</td>
    </tr>
    <tr>
      <td>To drink</td>
      <td>Drinken</td>
      <td>dink-</td>
    </tr>
    <tr>
      <td>To sit</td>
      <td>Zitten</td>
      <td colspan="1" rowspan="3">
        (= to be somewhere, so use ʌr- instead)
      </td>
    </tr>
    <tr>
      <td>To stand</td>
      <td>Staan</td>
    </tr>
    <tr>
      <td>To lay</td>
      <td>Liggen</td>
    </tr>
    <tr>
      <td>To hug</td>
      <td>Knuffel</td>
      <td>heg-</td>
    </tr>
    <tr>
      <td>To light, to turn on</td>
      <td>Aansteken, aanzetten</td>
      <td>ʟΣt-</td>
    </tr>
    <tr>
      <td>To force</td>
      <td>Dwingen</td>
      <td>fɔrx-</td>
    </tr>
    <tr>
      <td>To drive</td>
      <td>(Auto) rijden</td>
      <td>mov-</td>
    </tr>
    <tr>
      <td>To cycle</td>
      <td>Fietsen</td>
      <td>sΣkɔʟ-</td>
    </tr>
    <tr>
      <td>To build</td>
      <td>Bouwen</td>
      <td>bσω-</td>
    </tr>
    <tr>
      <td>To exercise</td>
      <td>Sporten</td>
      <td>эspɔrt-</td>
    </tr>
    <tr>
      <td>To meet</td>
      <td>Ontmoeten</td>
      <td>vθs-</td>
    </tr>
    <tr>
      <td>To write</td>
      <td>Schrijven</td>
      <td>ryt-</td>
    </tr>
    <tr>
      <td>To read</td>
      <td>Lezen</td>
      <td>ʟys-</td>
    </tr>
    <tr>
      <td>To attack/hurt</td>
      <td>Pijn doen</td>
      <td>σω-</td>
    </tr>
    <tr>
      <td>To defend</td>
      <td>Verdedigen</td>
      <td>potэk-</td>
    </tr>
    <tr>
      <td>To play</td>
      <td>Spelen</td>
      <td>toɥ-</td>
    </tr>
    <tr>
      <td>To learn</td>
      <td colspan="1" rowspan="2">Leren</td>
      <td>ʟλr-</td>
    </tr>
    <tr>
      <td>To teach</td>
      <td>tyx-</td>
    </tr>
    <tr>
      <td>To preach</td>
      <td>Prediken</td>
      <td colspan="1" rowspan="2">ɥohʌn-</td>
    </tr>
    <tr>
      <td>To philosophize</td>
      <td>Filosoferen</td>
    </tr>
    <tr>
      <td>To heal</td>
      <td>Helen/genezen</td>
      <td>mэdik-</td>
    </tr>
    <tr>
      <td>To police</td>
      <td>-</td>
      <td>poʟys-</td>
    </tr>
    <tr>
      <td>To fight fire</td>
      <td>-</td>
      <td>fΣrσω-</td>
    </tr>
    <tr>
      <td>To boss (around)</td>
      <td>De baas spelen</td>
      <td>bɔs-</td>
    </tr>
    <tr>
      <td>To report</td>
      <td>Verslag geven</td>
      <td>rypot-</td>
    </tr>
    <tr>
      <td>To fail</td>
      <td>mislukken</td>
      <td>fλʟ-</td>
    </tr>
    <tr>
      <td>To spread, to scatter</td>
      <td>Verspreiden</td>
      <td>sɑkɑt-</td>
    </tr>
    <tr>
      <td>To break</td>
      <td>Kapot maken</td>
      <td>bɔrok-</td>
    </tr>
    <tr>
      <td>To wear</td>
      <td>Dragen</td>
      <td>ωær-</td>
    </tr>
    <tr>
      <td>To invite</td>
      <td>Uitnodigen</td>
      <td>invyt-</td>
    </tr>
    <tr>
      <td>To face</td>
      <td>-</td>
      <td>fλs-</td>
    </tr>
    <tr>
      <td>To knit</td>
      <td>Breien</td>
      <td>niten-</td>
    </tr>
    <tr>
      <td>To sew</td>
      <td>Naaien</td>
      <td>ȿuω-</td>
    </tr>
    <tr>
      <td>To converse</td>
      <td>Praten</td>
      <td>kɔnver-</td>
    </tr>
    <tr>
      <td>To discuss (argumentative)</td>
      <td>Discussieren</td>
      <td>diskes-</td>
    </tr>
    <tr>
      <td>To join (together)</td>
      <td>Samenvoegen</td>
      <td>ɥon-</td>
    </tr>
    <tr>
      <td>To fuck</td>
      <td>Geslachtsgemeenschap bedrijven</td>
      <td>seks-</td>
    </tr>
    <tr>
      <td>To cry</td>
      <td>Huilen</td>
      <td>kyr-</td>
    </tr>
    <tr>
      <td>To dry</td>
      <td>(Af)drogen</td>
      <td>rλɥ-</td>
    </tr>
    <tr>
      <td>To wet</td>
      <td>Natmaken</td>
      <td>nλɥ-</td>
    </tr>
    <tr>
      <td>To stab</td>
      <td>Steken</td>
      <td>pok-</td>
    </tr>
    <tr>
      <td>To screw</td>
      <td>Schroeven</td>
      <td>rumb-</td>
    </tr>
    <tr>
      <td>To explore</td>
      <td>Ontdekken (zoeken)</td>
      <td>enkɔv-</td>
    </tr>
    <tr>
      <td>To discover</td>
      <td>Ontdekken (vinden)</td>
      <td>diskɔv-</td>
    </tr>
    <tr>
      <td>To chew</td>
      <td>Kauwen</td>
      <td>xer-</td>
    </tr>
    <tr>
      <td>To shine</td>
      <td>Stralen</td>
      <td>ȿin-</td>
    </tr>
    <tr>
      <td>To fly</td>
      <td>Vliegen</td>
      <td>fʟugeʟ-</td>
    </tr>
    <tr>
      <td>To connect</td>
      <td>Verbinden</td>
      <td>konэkt-</td>
    </tr>
  </tbody>
</table>

### Curse words

<table class="words">
  <thead>
    <tr>
      <th>English</th>
      <th>Dutch</th>
      <th>Σkɔnik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Fuck</td>
      <td>Fuck</td>
      <td>fʌk, fuk</td>
    </tr>
    <tr>
      <td>Bitch</td>
      <td>Bitch</td>
      <td>bix</td>
    </tr>
  </tbody>
</table>

## Appendix 2: Translations

### 'Het allermooiste cadeau'

<blockquote class="source">
    <i>Het was een bijzondere dag en Ming wilde zijn beste vriend Tibbe een cadeau geven. Maar wat moest het worden? Een etensbak had hij al. Hij had al een mand en een kauwspeeltje. Hij had alles al. Ming piekerde zich suf. Wat geef je aan iemand die alles al heeft? Niets! Wat is er beter dan niets? Maar waar vind je niets in een wereld vol met iets? Ming hoorde Frank vaak zeggen dat er niets op tv was. Maar voor zover hij het kon bekijken was er altijd wel iets op tv. Ming hoorde Suzie en haar vriendinnen zeggen dat ze niets te doen hadden. Maar voor zover hij het kon bekijken was iedereen altijd wel iets aan het doen.</i> [...truncated]
</blockquote>

ʌred en sɔʟ nenɔrmuto эn *Ming* wɔʟed ɥy gived en kado vɔr ʟλn amy bɔnbɔnbɔn nɔmo *Tibbe*. da ȿasyreʟ? hэbed en eskɑ-boʟe. hэbed en mɑnde эn en xerɑ-ludo. hэbed ʌʟ. *Ming* pэned din. dɑ gives ku vɔr en Σmʌn hэbo ʌʟ. niʟ! dɑ ʌred ku bɔnbɔn dʌn niʟ? dɑ kσ finded niʟ inder en wθd ʌpo ɑfэros? *Ming* hɔred ɥy *Frank* sæded ɥy ʌred niʟ inder de tλʟe-vydo. ɥэt, vysed ʌʟdΣm ɑfэros inder de tλʟe-vydo. *Ming* hɔred ɥy *Suzie* эn ʟλn ɑmys sæded hэbed niʟ ɥy tθneʟ. ɥэt, ʌʟmʌn tθned ʌʟdΣm ɑfэros.

### 'Charlie and the Chocolate Factory'

<blockquote class="source">
    <i>These two very old people are the father and mother of Mr Bucket. Their names are Grandpa Joe and Grandma Josephine. And these two very old people are the father and mother of Mrs Bucket. Their names are Grandpa George and Grandma Georgina. This is Mr Bucket. This is Mrs Bucket. Mr and Mrs Bucket have a small boy whose name is Charlie Bucket. This is Charlie. How d'you do? And how d'you do? And how d'you again? He is pleased to meet you. The whole of this family – the six grown-ups (count them) and little Charlie Bucket – live together in a small wooden house on the edge of a great town.</i> [...truncated]
</blockquote>

dλses Σmʌnes din odu ʌrev de ɑdɑ эn de ʌmɑ vɔn Σmy *Bucket*. vΣn nɔmes ʌrev odɑ *Joe* эn omɑ *Josephine*. эn dλses Σmʌnes din odu ʌrev de ɑdɑ эn de ʌmɑ vɔn Σmɑ *Bucket*. vΣn nɔmes ʌrev odɑ *George* эn omɑ *Georgina*. dλs ʌred Σmy *Bucket*. dλs ʌred Σmɑ *Bucket*. Σmy эn Σmɑ hэbev en Σmy ʟiʟ nɔmo *Charlie Bucket*. dλs ʌred *Charlie*. dɑ ʌrem kɑ? эn, dɑ ʌrem kɑ? эn rλ, dɑ ʌrem kɑ? ʌred bΣto ɥy vθsem dy. de fʌmʟy ʌpo – de эsɑ ɑdos (xɑ kʌʟe vΣ) эn de *Charlie Bucket* ʟiʟ – hɑbytev эnsɑmo inder en bσwɑ wot ʟiʟ nэstσȿ en stэte wɔp.

### 'With the last flicker'

<span class="source">One quiet afternoon, I was pulled from the shelf where dozens like me were arranged in neat rows.</span>  
en kʌʟmo midsɔʟ, ʌrʌm ȿɑsyro vyɑsy de ȿævo. ɑsɑ din ʟyko mu ʌrʌv inder rowes bo.  
<small>(a) (calm) (afternoon), (was-I) (chosen) (from-mov.) (the) (shelf). (there) (much) (resembling) (me) (was-them) (in) (rows) (beautiful).</small>

<span class="source">I traveled in the cart throughout the whole store and at the end, placed in a small paper bag.</span>  
voɥɑvem inder de tokɑ vydɔr de ȿɔp ʌpo эn эt эnde, ʌrɔm ʟugo inder en sʌko ʟiʟ pɑpyres.  
<small>(travel-I) (in-loc.) (the) (vehicle) (trough-mov.) (the) (store) (complete) (and) (loc.) (end), (be-I-fut.) (placed) (in) (a) (bag) (small) (paper).</small>

<span class="source">I was brought home to a room that would soon be my entire world.</span>
ʌrʌm nλmo vyɑsɑ hom vyɑsɑ en rθm. dλs rθm ʌrɔʟ mun wθd ʌpo.  
<small>(was-I) (taken) (there-mov) (home) (there-mov) (a) (room). (this) (room) (be-he-fut.)(my) (complete) (world).</small>

<span class="source">They screwed me into my socket and my warm glow came to life.</span>  
rumbev mu vyinder mun ȿʌt эn mun ȿin-usɔʟ wɑm kɔmʌd ɥy vyveʟ.
<small>(screw-they) (me) (in-mov.) (my) (hole) (and) (my) (shiny-light) (warm) (began-he) (nested sentence) (live-he).</small>

<span class="source">My light filled the room, this room full of potential.</span>  
mun usɔʟ ʌped de rθm, dλs rθm ʌpo an futσ bɔn.  
<small>(my) (light) (fill-he) (the) (room), (this) (room) (full) (with) (future) (good).</small>

<span class="source">The bookshelves were filled, a dozen papers were spread out on the desk, on the couch the cushions were just slightly off center and in the corner a big, comfortable chair was positioned to face the window.</span>  
de lybre-ȿævos ʌrʌv ʌpo, pɑpyres din ʌrʌv sɑkɑto bovtσȿ de wσk-tɑbʟu. bovtσȿ de bʌnku, de pilθwes ʌrʌv nemid ʟiʟ. inder de hθk en sэgθ wɔp bɔn ʌrʌd fλso de window.  
<small>(the) (bookshelves) (were-they) (full), (papers) (many) (were-they) (spread) (atop) (the) (work-table). (atop) (the) (couch), (the) (cushions) (were-they) (not-mid) (small). (in-loc.) (the (corner) (a) (chair) (big) (good) (was-it) (face) (the) (window).</small>

<span class="source">This room belonged to a cheerful family.</span>  
dλs rθm ʌrʌd vɔn en fʌmʟy bΣto.  
<small>(this) (room) (was-it) (of) (a) (family) (happy).</small>

<span class="source">The father was a poet and he loved to write during his free time, and the mother enjoyed all sorts of hobbies. </span>  
de ɑdɑ ʌrʌd en poet эn ʟuvʌd ɥy rytʌl ɑmid ʟλn dΣm otσ. de ʌmɑ ʟuvʌd hɔbys din.  
<small>(the)(father)(was-he) (a) (poet) (and)(loved-he)(nes.sent.)(write-he) (during) (his) (time) (own). (the) (mother) (loved-she) (hobbies) (many).</small>

<span class="source">I watched as the children came into the room, asking countless questions with a curious look on their faces. </span>  
vysʌm kΣ de kidos kɔmʌv inder de rθm ɥy fʌrʌv din ɑmid ɥy vysʌv ɑn fλsus fʌrono.  
<small>(saw-I) (when) (the) (children) (came-they) (in-loc.) (the) (room) (nest. sent.) (asked-they) (much) (during) (nes.sent)(watched-they)(with)(faces) (questioning).</small>

<span class="source">The family loved me, used me, to read their books and papers or play board games beneath me.</span>  
de fʌmʟy ʟuvʌv mu, ʟysʌv vΣn lybres эn pɑpyres ɔf toɥʌv ludos under mu.  
<small>(the) (family) (loved-they) (me), (read-they) (their) (books) (and) (papers) (or) (played-they)(games) (underneath) (me).</small>

<span class="source">The mother used to knit and sew while talking with her friends until late in the evening, discussing life and asking themselves deliberate questions. </span>  
de ʌmɑ nitenʌd эn ȿuωʌd ɑmid ɥy sædʌv ɑn ʟλn ɑmys dΣmɑ omэr эnde, diskesʌv vyvɑ эn fʌrʌv vΣsэv fʌrɑ bɔn.  
<small>(the) (mother) (knitted-she) (and) (sewed-she) (during) (nes. sent.) (talked-they) (with)(her)(friends) (until) (evening) (end), (discussed-they) (life) (and) (ask-they)(themselves) (questions)(good).</small>

<span class="source">The conversations were deep and they were engaging their minds to the fullest. Back then, I wasn't just lighting up a room, I was lighting up their minds.</span>  
de kɔnverɑs ʌrʌv dypfo эn ʌrʌv pэno din. ɑtσw, ʟΣtʌm ne en rθm, ʟΣtʌm vΣn mΣndes.  
<small>(the)(conversations)(were-they)(deep) (and)(were-they)(think) (much). (Then), (light-I) (not) (a) (room), (light-I) (their) (minds).</small>

<span class="source">I used to watch the father scribble in his notebooks, pondering about the meaning of life.</span>  
vysʌm de ɑdɑ ɥy rytʌd inder ʟλn ryt-lybres, pэnʌd uber de signyfo vɔn vyvɑ.  
<small>(watched-I) (the)(father)(nes. sent.)(write-he)(in) (his) (notebooks), (think-he) (about) (the) (meaning) (of) (life).</small>

<span class="source">I would watch the children be so eager to read and explore, and bombard their parents with endless questions.</span>  
vysʌm de kidos ɥy eksytev ɥy ʟysev эn enkɔvev. vΣ fʌrʌv vΣn udэrɑs fʌrɑs din.  
<small>(watch-I)(the)(children)(nes. sent.)(excite-they)(nes. sent.)(read-they)(and)(explore-they). (they)(ask-they)(their)(parents)(questions)(many).</small>

<span class="source">But slowly, things started to change.</span>  
ɥэt neɥyt, ɑfэros kɔmʌv ɥy ȿʌnsʌv.  
<small>(but) (slow), (things) (begin) (nes. sent.) (change-they).</small>

<span class="source">It is not my light that glows over them, but rather a different light, a steady blue glow illuminating their faces.</span>  
ʌred ne mun ȿin-usɔʟ ɥy ȿined vybovder vΣ, ɥэt atσw en usɔʟ nesamo, en ȿin-usɔʟ kɔnsэkɑ ʟθw ȿined inder vΣn fλsus.  
<small>(is-it) (not) (my) (shiny-light)(nes.sent.)(shine-he) (over) (them), (but) (rather) (a) (light) (different), (a) (shiny-light) (steady) (blue) (shine-he) (in) (their) (faces).</small>

<span class="source">It started with the children spending less and less time asking questions, and more time on their screens. </span>  
kɔmed ɑn ɥy de kidos fʌrev finfinfinfin fʌrɑ, эn dindin dΣm inder vΣn ȿin-vytros.  
<small>(start-it) (with) (nes.sent.) (the) (children) (ask-they) (less and less, lesserest) (questions), (and) (more) (time) (in) (their) (screens).</small>

<span class="source">The father stopped surrounding himself with a bunch of papers and books, and now brought his laptop with him to the room instead.</span>  
de ɑdɑ эndʌd ɥy ʌred wisder pɑpyres эn lybres din, эn ɑnσ tэked ʟyn kʌʟkuʟɑ vyɑsɑ de rθm ɑn ʟy.  
<small>(the) (father) (stopped-he)(nes.sent)(is-he)(between) (papers) (and) (books) (many), (and)(now) (take-he) (his ) (computer) (to-loc.) (the) (room)(with)(him).</small>

<span class="source">Finally, the mother now spent more time typing on her little glass instrument than talking with her friends. </span>  
ɑnde, de ʌmɑ ɑnσ ɥθsed ʟyn ȿin-vytro dindin dʌn ɥy sæded ɑn ʟyn ɑmys.  
<small>(final), (the)(mother) (now) (use-she) (her) (screen) (more) (than) (nes.sent.) (speak-she)(with)(her) (friends).</small>

<span class="source">As this went on, I noticed the father had stopped writing, the mother stopped sewing and knitting and the children stopped questioning. </span>  
ɑmid dλs, vysʌm de ɑdɑ эndʌd ɥy ryteʟ, de ʌmɑ эndʌd ɥy ȿuωed эn nitened эn de kidos эndʌv fʌrono.  
<small>(during) (this), (saw-I) (the) (father (stopped-he)(nes.sent)(write-he), (the) (mother) (stopped-she)(nes.sent.)(sew-she)(and)(knit-she)(and)(the)(children) (stopped-they)(questioning).</small>

<span class="source">They also seem to have lost their sense of critical thinking. They were still the same family, but something had shifted.</span>  
ʟθsev ʌʟso vΣn pэna-pσer. эstλhev de fʌmʟy sɑmo, ɥэt ɑfэros ȿʌnsʌʟ.  
<small>(lose-they) (also) (their) (think-power). (stay-they) (the) (family) (same), (but) (things) (changed-it).</small>

<span class="source">I’m getting old. I’m not sure how long I’ll remain glowing. </span>  
ʌrɔm odu. wisem ne kɑ dΣm din ɥy эstλhem ɥy ȿinem.  
<small>(become-I) (old). (know-I) (not) (how) (time) (much) (nes.sent.) (stay-I) (nes.sent.) (shine-I).</small>

<span class="source">I’m not even sure if it matters anymore. The light I’m able to deliver isn’t wanted anymore.</span>  
wisem ne ɥy ʌred ɑturo impo. mun usɔʟ wɔʟev ne ɑturo.  
<small>(know-I) (not) (nes.sent) (is-it) (anymore) (important). (my) (light) (want-they) (not) (anymore).</small>

### 'The Chronicles of Narnia: The Magician's Nephew'

<blockquote class="source">
    <i>This is a story about something that happened long ago when your grandfather was a child. It is a very important story because it shows how all the comings and goings between our own world and the land of Narnia first began. In those days Mr. Sherlock Holmes was still living in Baker Street and the Bastables were looking for treasure in the Lewisham Road. In those days, if you were a boy you had to wear a stiff Eton collar every day, and schools were usually nastier than now. But meals were nicer; and as for sweets, I won't tell you how cheap and good they were, because it would only make your mouth water in vain. And in those days there lived in London a girl called Polly Plummer. She lived in one of a long row of houses which were all joined together. One morning she was out in the back garden when a boy scrambled up from the garden next door and put his face over the wall. Polly was very surprised because up till now there had never been any children in that house, but only Mr. Ketterley and Miss Ketterley, a brother and sister, old bachelor and old maid, living together. So she looked up, full of curiosity. The face of the strange boy was very grubby. It could hardly have been grubbier if he had first rubbed his hands in the earth, and then had a good cry, and then dried his face with his hands. As a matter of fact, this was very nearly what he had been doing.</i> [...truncated]
</blockquote>

dλs ʌred en histɔru uber en ɑfэro ɥy hэped ɔm ɑtσw din. ɑtσw, dyn odɑ ʌred en kido. ʌred en histɔru impo kʌs ɥy ȿowed ɥy hэpɑs ʌʟ tikse wyn wθd эn de ʟʌnde vɔn *Narnia* kɔmev эdθn. ɔm dʌts sɔʟes, Σmy *Sherlock Holmes* hɑbytʌd ɑturo эt *Baker Street* эn de *Bastables* sukʌm ȿɑsoxu эt de *Lewisham Road*. ɔm dʌtes sɔʟes, if ʌrʌs en Σmy ʟiʟ, musɔs ɥy wæres en vestθ nevydo ɔm sɔʟ ʌʟ эn ekɔʟes ʌrʌv dindΣm womwom dʌn ɑnσ. ɥэt, eskɑkos ʌrʌv bonbon; эt kæntys, sædem ne ɥy kæntys ʌrʌv kɑ xypuxypu эt kɑ ɥemɥem. kʌs ȿʌʟev ɥy nλɥev dyn ɔro. эn ɔm dʌts sɔʟes, en Σmɑ ʟiʟ nɔmo *Polly Plummer* hɑbyted эt London. hɑbyted inder en эdrʌn us en row ʌro bσwo ɥono эnsɑmo. ɔm эdrʌn kɔmosɔʟ, ʌrʌd inder de hinder-kurɑ kΣ ɥy en Σmy ʟiʟ vyɑsy de nэsder-kurɑ vysed vybovder de wɔʟ. *Polly* ʌrʌd sepryso din kʌs ɥy dΣmɑ nσ, kidos ʌrʌv niʟdΣm inder dʌt bowɑ. ʟono, Σmy *Ketterley* эn Σmɑ *Ketterley*, en nybo эn en sis, en Σmy эn en Σmɑ, hɑbytɑv эnsɑmo. dʌs, *Polly* vysɑʟ vyup ɑn kʌdkuro. The fλs vɔn de nefʌmʟɑ Σmy ʌrʌd ȿefugo. kэned ne ȿefugoȿefugo eku ɥy de Σmy tσȿed de эrde mэt ʟyn hʌndes, kyred, эn rλɥed ʟyn fλsu mэt ʟyn hʌndes. afэkto, dʌt ʌrʌd finɑ ku hэpo.

### 'Elephant & Piggie: I Am Invited to a Party!'

P: <span class="source">Gerald!</span> Gerald!  
P: <span class="source">Look! Look!</span> xɑ vyse! xɑ vyse!  
P: <span class="source">I am invited to a party!</span> ʌrem invyto vyɑsɑ en fэd.  
E: <span class="source">Cool.</span> Σsy.  
P: <span class="source">It is cool.</span> ʌred Σsy.  
P: <span class="source">Will you go with me? I have never been to a party.</span> dɑ gλhɔs ɑn mu? gλhɔm niʟdΣm vyɑsɑ en fэd.  
E: <span class="source">I will go with you. I know parties.</span> gλhɔm ɑn dy. wisem fэdes.  
E & P: <span class="source">PARTY! PARTY! PARTY! PARTY!</span> fэd! fэd! fэd! fэd!  
E: <span class="source">Wait! What if it is a fancy party? We must be ready.</span> xɑ wλde! dɑ ku if ʌred en fэd fænȿy? musen ɥy ʌren ʌpo.  
P: <span class="source">Really?</span> dɑ?  
E: <span class="source">I know parties.</span> wisem fэdes.  
P: <span class="source">He knows parties.</span> wised fэdes.  
P: <span class="source">Is this fancy?</span> dɑ dλs ʌred fænȿy?  
E: <span class="source">Very fancy.</span> din fænȿy.  
E & P: <span class="source">PARTY! PARTY! PARTY! PARTY!</span> fэd! fэd! fэd! fэd!  
E: <span class="source">Wait! What if it is a pool party?</span> xɑ wλde! dɑ ku if ʌred en fэd ɑkwɑ-ȿʌt?  
P: <span class="source">A fancy pool party?</span> dɑ en fэd fænȿy ɑkwɑ-ȿʌt?  
E: <span class="source">WE MUST BE READY!!!</span> musen ɥy ʌren ʌpo!  
E: <span class="source">I know parties.</span> wisem fэdes.  
P: <span class="source">He knows parties.</span> wised fэdes.  
P: <span class="source">How is this?</span> dɑ kɑ dλs ʌred?  
E: <span class="source">We will make a splash.</span> mλkɔn en эspeʟæȿ.  
E & P: <span class="source">PARTY! PARTY! PARTY! PARTY!</span> fэd! fэd! fэd! fэd!  
E: <span class="source">Wait! What if it is a costume party?</span> xɑ wλde! dɑ ku if ʌred en fэd vestθ?  
P: <span class="source">A fancy pool costume party?</span> dɑ en fэd fænȿy ɑkwɑ-ȿʌt vestθ?  
E: <span class="source">WE MUST BE READY!!!</span> musen ɥy ʌren ʌpo!!!  
P: <span class="source">He had better know parties...</span> wised bonbon fэdes...  
P: <span class="source">Now can we go to the party?</span> ɔm ɑnσw gλhen vyɑsɑ de fэd?  
E: <span class="source">Yes. Now we are ready.</span> ɥæ, ɔm ɑnσw ʌren ʌpo.  
P: <span class="source">Well, that is a surprise. You do know parties!</span> nθ, dλs ʌred en seprys. wises fэdes!  

## Appendix 3: Results from the survey

![Welke talen spreek je vloeiend?](https://cdn.geheimesite.nl/images/iconic/survey0.png)
![Ben je meertalig opgevoed?](https://cdn.geheimesite.nl/images/iconic/survey1.png)

## Honourable mentions

Saj: A Conlang with Two Dimensions of Time. <https://youtu.be/DDwf0dorgN8>

The Są̂qʌk Language. <https://satyrs.eu/saqvk>

The Conlanger's Library. <https://library.conlang.org>

I make languages (and you can too). <https://media.ccc.de/v/26c3-3520-en-conlanging_101>

Conlanging 101. <https://conlang.org/cl101.pdf>

The Language Construction Kit. <https://zompist.com/kit.html>

Omniglot. <https://omniglot.com>

<span class="important">But most important of all, we have hereby scientifically proven that cats are better than dogs. You’re welcome.</span>

![Honden of katten?](https://cdn.geheimesite.nl/images/iconic/survey2.png)

<!-- Progressive enhancement: on supporting browsers, the font sizing of certain letters will be slightly tweaked -->
<script type="text/javascript" defer>
  function wrapCharacter(char, className) {
    const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT, null, false);

    const nodes = [];
    while (walker.nextNode()) {
      nodes.push(walker.currentNode);
    }

    for(const node of nodes) {
      if (node.nodeValue.includes(char)) {
        const frag = document.createDocumentFragment();
        for (const ch of node.nodeValue) {
          if (ch === char) {
            const span = document.createElement("span");
            span.className = className;
            span.textContent = ch;
            frag.appendChild(span);
          } else {
            frag.appendChild(document.createTextNode(ch));
          }
        }
        node.parentNode.replaceChild(frag, node);
      }
    }
  }

  wrapCharacter("Σ", "sigma");
  wrapCharacter("θ", "theta");
</script>
