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

## Chapter 1: Theoretical background

### Linguistic concepts and theories

**Phonology** and **phonetics** are studies about the sounds needed to produce spoken languages. The lines between the fields are blurry. It seems linguists have yet to reach consensus on the exact definition of the terms (Ohala, 1990). Whilst there is a lot of overlap between the fields, generally, the following distinctions can be made:

Phonetics is the study of the physical aspects of speech sounds (Cohn & Huffman, 2014), specifically the production and articulation of sounds. In phonetics, sounds are called **phones** and denoted using square brackets (Emrys et al., 2009) in an approximate alphabet developed by the International Phonetics Association (Delahunty & Garvey, 2010).

Phonology, however, is occupied with abstract sounds as perceived by the brain (Cohn & Huffman, 2014). Here, sounds are called **phonemes** and written down in between slashes (Emrys et al., 2009). The actual pronunciations--phones-- for a phoneme can differ based on the surrounding phonemes in a word.

For example: the /p/ phoneme can be both [p] (in "spit") and [pʰ] (in "pit"), where the latter is pronounced with a little extra puff of air called aspiration (Emyrs, 2009). Phonological rules dictate how phones correspond to phonemes. Examples would be devoicing--where consonants are weakened at the end of words or following a voiceless sound--, and spirantization--where consonants shift "up" in between vowels (Emrys et al., 2009).

For our purposes, the exact definition of these terms and differences between the subfields does not matter all that much. However, a term that is important is the **phonetic inventory** of a language. The phonetic inventory describes all possible sounds that occur in a language (Emrys et al., 2009). Together, they form the **phonaesthetics** (sometimes referred to as sprachgefühl) of a language: the general vibe that a language conveys (Emrys et al., 2009).

**Orthography** studies the wide variety of ways we write languages down. The smallest unit of writing (a single symbol), is called a **grapheme** (Emyrs et al., 2009). The simplest writing system is the **alphabet**, wherein every grapheme corresponds to a single phoneme (Emrys et al., 2009).

Western alphabets are all derivatives of the Latin or Roman alphabet. A **romanisation** is therefore a mapping of phonemes to graphemes where you assign a letter from the Latin alphabet to every phoneme in the phonetic inventory of your language (Emyrs et al., 2009). This is by far the simplest way to write down any arbitrary language, and is thus often used by linguists for reasoning about languages.

Romanisations, like for example the Chinese romanisation Pinyin, can also act as a shortcut to write logographic languages down using standardized QWERTY keyboards (Emyrs et al., 2009).

However, alphabets are not the only possible writing system. Other cultures often utilize **syllabaries** or **logographs** for their writing. A syllabary is similar to an alphabet, but in a syllabary a grapheme corresponds to an entire syllable, rather than a single phoneme (Britannica, 1998). A prominent language using a syllabary for its orthography is Japanese. Logographic writing goes even further: a single grapheme corresponds to a whole word or grammatical construction. Examples would include Korean and Chinese.

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

> I _eat_, he _eats_, we are _eating_, they have _eaten_.

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

Typically, compounds are hyponymic with their nucleuses (Bauer, 2008): _bedroom_ is a subcategory of _room_. However, sometimes the nucleus of the compound is unrelated to the meaning of the compound itself. These kinds of compounds are called exocentric, opposed to endocentric (Don et al., 2023). Examples from English would include cutthroat, pickpocket, breakfast, and scarecrow.

There's two distinct types of plural:

**Additive plural** indicates that there is more than one of something. It is characterized by its referential homogeneity, that is, every member of the group 'dogs' is of type 'dog' (Overstreet & Yule, 2023). Essentially all Western-European languages feature additive (or 'regular') plural.

**Associative plural**, on the other hand, refers to (human) groups featuring referential heterogeneity; every member of the group is a unique individual. In addition, these individuals are all in some way related to each other, or a prominent member of the group (Overstreet & Yule, 2023). Hence, '_associative_' plural. Constructions like these have been reported to be widespread in the languages of Africa, Asia, Australia, and the Pacific (Daniel & Moravcsik, 2013).

Based on their morphology, we can categorize languages into three distinct categories:

**Isolating** languages make little use of inflection and instead utilize supplemental words and context to convey meaning (Don et al., 2023). Their ratio of morphemes to words is often fairly low, meaning most words consist of no more than one or two morphemes. In extreme cases, there is no distinction between words and morphemes: each word is also a morpheme and vice versa.

**Agglutinating** languages are more morphologically complex, and make heavy use of affixes to construct long, complex and very specific words (Don et al., 2023). In agglutinative languages, words are formed by stringing together morphemes in a linear sequence. Each added affix has a distinct grammatical function that contributes to the meaning of the word (Don et al., 2023).

As an example, take the English curiosity of 'antidisestablishmentarianism', which consists of seven morphemes (anti- dis- establish -ment -ari -an -ism), all attributing to the meaning. In English, words like these are rare. However, in agglutinative languages such as Turkish they are very common.

**Fusional** languages are similar to agglutinating languages (in their morphological complexity), but where agglutinated words are "assembled" of distinct, easily recognisable affixes, morphemes in fusional languages fuse in a way that changes their forms (Don et al., 2023). You can think of agglutinative languages as LEGO, and fusional languages as clay.

The meaning of words can differ based on the social-cultural setting. The **denotation** says what the word objectively means or represents—the dictionary definition (Don et al., 2023). The **connotation** of the word, however, is the "emotional value, stylistic value, or culturally-defined associations evoked by the word" (Don et al., 2023), and changes over space, time and generations.

**Syntax** is the linguistic subfield concerned with the construction of sentences out of smaller parts (Don et al., 2023), namely phrases and (subordinate) clauses. A **phrase**, like a compound, consists of a nucleus and an adjunct, where the adjunct further specifies the nucleus. The nucleus can be identified by the fact that the phrase would be ungrammatical without it, while the adjunct can be left out without issues.

> 'very nice people'

In the phrase above, _people_ is the nucleus and _very nice_ the adjunct. Phrases can be nested; in the previous example, the adjunct itself is a phrase as well, where nice is the nucleus and very the adjunct ('nice people' is grammatical but 'very people' is not).

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

Phrases that are not required by the predicate are called **adjuncts** (Don et al., 2023). In the following example, to _Alice_ functions as the adjunct:

> 'Bob gives a book to Alice'

Sometimes, a sentence is **self-reflective**. An example would be: 'the man washes himself'. The predicate 'to wash' is bivalent, but in the example there is just a single participant; _the man_ both executes and undergoes the action. In these cases, a reflective pronoun ('himself') is used.

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

In the example, 'to paint' has a valency of two, so only _the artist_ and _a beautiful landscape_ are strictly necessary in order for the sentence to be grammatical.

Consider the following two sentences:

> Hannibal Lecter murdered two detectives.  
> Two detectives were murdered by Hannibal Lecter.

Semantically, the sentences are equivalent. In both sentences, _Hannibal Lecter_ is the agent, and _two detectives_ the patient. However, the **grammatical roles** fulfilled by the phrases differ. The grammatical roles mainly decide the perspective the situation is described from (Don et al., 2023). In the first sentence _Hannibal Lecter_ is the subject, whilst in the second sentence _two detectives_ is.

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

**Posteriori** languages are based on an existing language while in contrast, **priori** languages are completely made from scratch. Priori languages are seen as harder to create, because it is difficult to make something completely novel without accidentally including influences of existing languages (Emrys et al., 2009).

A **naming language**, where you only need phonology and morphology, is relatively easy to create in comparison to a more extensive language, allowing actual phrases and sentences. In a more extensive language, you need to take syntax into account, as well as a more comprehensive morphology. When you decide to create a fully speakable language, pragmatics and stylistics require more attention and you will need a larger vocabulary (Emrys et al., 2009).

When creating a language, most conlangers decide on some kind of 'hook', to make their language unique. For example, Logban does not allow ambiguity and Kēlen does not make use of verbs. Ithkuil also has an interesting hook, as it attempts to pack as much information as possible in the smallest space (Emrys et al., 2009).

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

**Toki pona** is an engelang, literally translating to 'language good/simple' (Emrys et al., 2009). In contrast to Lojban, Toki Pona makes heavy use of ambiguity. A multitude of words can have multiple meanings, making the language largely context based. Another aspect of this ambiguity is that it can not specify whether a word is singular or plural. Toki Pona only has fourteen letters in its alphabet and just 131 root words. Due to its minimal vocabulary, the language makes use of the combination of words. For example, 'friend' is made of the combination 'good person' ('jan pona') (Pona, 2005).

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

Before starting on the process of actually constructing our language, we need to decide how extensive and complete we want the language to be. As an example, a naming language is far less complex than a more advanced language meant for full human communication (Emrys et al., 2009).

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
- What will the _sprachgefuhl_ be like?

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

The way phonemes are combined in syllables largely decides the phonaesthetics of the language, because the way consonants and vowels are arranged can change the sound and perception of the language (Emrys et al., 2009).

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
| verb -> benefactive | -yp    | _non-existent_          |
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
| manner          | _no affix_ | -ly, -ily                |
| moment          | a-         | _non-existent_           |
| repetition      | rλ-        | re-                      |

#### Compounds

Compounds are formed by putting multiple existing words together to form a new word. In our language, all compounds are hyphenated, and follow the structure of _adjunct-nucleus_, where the adjunct is a specifier for the nucleus. In virtually all cases, the compound is hyponymic with its nucleus.

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
<tr><th>2nd person</th><td>dy</td><td>-ed</td></tr>
<tr><th>3rd person</th><td>ʟλ</td><td>-eʟ</td></tr>
<tr><th>Group 1st (in)</th><td>wy</td><td>-ep</td></tr>
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

> wisem ɥy kэneʟ ne ɥy ʟσfeʟ.  
> <small>(know-I) (nested sentence) (can-he) (not) (nested sentence) (walk-he)</small>  
> 'I know that he can not walk.'

<!-- Here because otherwise the stupid Markdown will join the examples together -->

> poremyseʟ ɥy gλheʟ ɑsɑ.  
> <small>(promise-he) (nested sentence) (go-he) (there)</small>  
> 'He promised to go there.'

Since nested sentences can include grammatical 'glue' words, the nested sentence has to be the last phrase of the sentence, to prevent ambiguity. This has the added benefit that it makes sentences easier to understand, because it minimizes the cognitive distance, allowing the main idea to be processed first and then linearly presenting additional information, rather than having the reader jump around the sentence to understand it.

Nested sentences can also include further nested sentences, again utilizing the 'ɥy' word, given they are the last phrase of the nested clause. However, this makes for longer, more complex sentences and is therefore discouraged.

> pθveʟ ɥy sædeʟ ɥy ʟuveʟ de kɔʟɔr nэna.  
> <small>(allowed-he) (nested sentence) (say-he) (nested sentence) (love-he) (the) (color) (pink)</small>  
> 'He is allowed to say that he likes the color pink.'

#### Direct vs indirect speech

For direct speech, we utilize rules similar to those from English and Dutch, placing the literal sentence in quotation marks. The writer is free to choose whatever quotation marks they prefer, but are encouraged to stay consistent within their writing.

> Robin says: "I like the color pink."  
> sæded Robin "ʟuvem de kɔʟɔr nэna."

For indirect speech, we reuse the existing grammar already present for nested sentences:

> Robin says that he likes the color pink.  
> sæded Robin ɥy ʟuveʟ de kɔʟɔr nэna.

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

Negations and affirmations, like 'not', '_wel_', 'often', 'never', 'always' are, in our language, seen as "adjectives" that modify the meaning of a verb, and thus follow the same rules that apply for adjectives too. They are placed right behind the verb.

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

> Oh, great, another meeting. I just _love_ them _so much_ [sʌr.]  
> No, seriously, we need to finish this today [nɥuk.]  
> If we do not change anything now, we have a real problem [sir.]  
> I really do appreciate your help, thank you [nsʌr.]  
> Ik heb daar geen actieve herinnering aan [ref.]  
> Misschien is hij op zoek naar een functie elders [ref.]  
> "God does not play dice" -- "Stop telling God what to do" [syt.]  
> Yeah, sure, I'm just _thrilled_ to be stuck here all day [sʌr.]  
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

Bauer, L. (2008). <i>English Exocentric Compounds</i>. <https://doi.org/10.1007/s11525-008-9122-5>

Belfakir, L. (2020). <i>Morphology: Derivation vs. Inflection</i>. <https://fldm.usmba.ac.ma/uploads/2020/03/AN423-Belfakir-Intro-2-Lx-8-Morphology-2.pdf>. ([archived](https://ftp.dupunkto.org/~axcelott/belkafir.pdf))

Booij, G. (2005). <i>Compounding and derivation: evidence for Construction Morphology</i>. <https://doi.org/10.1075/cilt.264.08boo>

Britannica. (1998, July 20). Citation. In <i>Encyclopedia Britannica</i>. Retrieved February 14, 2025, from <https://www.britannica.com/topic/syllabary>

Cambridge Dictionary. (n.d.). Citation. In <i>Cambridge online dictionary</i>. Retrieved February 14, 2025, from <https://dictionary.cambridge.org/dictionary/english/natural-language>

Cohn, A. & Huffman, M. K. (2014). Interface between phonology and phonetics. <i>Oxford Bibliographies</i>. <https://doi.org/10.1093/obo/9780199772810-0168>

Council of Europe. (2020). <i>Common European Framework of Reference for Languages: Learning, teaching, assessment -- Companion volume</i>. Council of Europe Publishing, Strasbourg. <https://coe.int/lang-cefr>

Daniel, M., & Moravcsik, E. (2013). The associative plural. In M. Dryer & M. Haspelmath (Eds.), <i>The World Atlas of Language Structures (WALS)</i> (pp. 150-153). Oxford University Press.

David C.S. LI (2003). Between English and Esperanto: what does it take to be a world language? <i>International Journal of the Sociology of Language, 2003</i>(164), 33-63. <https://doi.org/10.1515/ijsl.2003.055>

Delahunty, G. & Garvey J. (2010). <i>The English Language: From Sound to Sense</i>. <https://doi.org/10.37514/per-b.2010.2331>

Don, J., Meyer, C. & Rispens, J. (2023). <i>Taal en Taalwetenschap</i>. (3rd ed.). Wiley Blackwell.

Emrys, S. Fink, A. & Peterson, D. (2009). <i>Conlanging 101</i>. Language Creation Society. Retrieved September 8, 2024, from <https://conlang.org/cl101.pdf>. ([archived](https://ftp.dupunkto.org/~axcelott/cl101.pdf))

Gibson, E., Futrell, R., Piantadosi, S. T., Dautriche, I., Mahowald, K., Bergen, L., & Levy, R. P. (2019, February 23). <i>How Efficiency Shapes Human Language, TICS 2019</i>. <https://doi.org/10.31234/osf.io/w5m38>

Gledhill, C. (1998). <i>The grammar of Esperanto</i> (pp. 150-pp). Lincom Europa. <https://u-paris.hal.science/hal-01220008/document>

Goullier, F. (2007). <i>Council of Europe tools for language teaching: Common European Framework of Reference and Portfolios</i>. Les éditions Didier. <https://www.coe.int/en/web/common-european-framework-reference-languages/documents>

Henning, J. (1995). <i>A naming language</i>. <https://fiatlingua.org/wp-content/uploads/2016/10/fl-00003E-00.pdf>. ([archived](https://ftp.dupunkto.org/~axcelott/naming-language.pdf))

Kemp, C., Xu, Y., & Regier, T. (2018, January 14). <i>Semantic typology and efficient communication</i>. <https://escholarship.org/content/qt1126n182/qt1126n182.pdf>

Kisa, S. E. (2003). <i>Oou: the Insane Language (or Friendly Genocide)</i>. Retrieved September 17, 2024, from <https://drive.google.com/file/d/1jLxGsmLDXHxxJJkB1PaAaoDvLHz-tLDY/view>. ([archived](https://ftp.dupunkto.org/~axcelott/Oou%20expanded%20vocabulary.pdf))

Mora Gutiérrez, J. P. (2001). Directed motion in English and Spanish. <i>Estudios De Lingüística Del Español, 11</i>. <http://elies.rediris.es/elies11/cap5111.htm>

Nicholas, N., & Cowan, J. W. (Eds.). (2003). <i>What Is Lojban?</i> Logical Language Group. <https://www.lojban.org/static/publications/level0/lojbanLevel0.paperback.pdf>

Niklaus, C., Cetto, M., Freitas, A., & Handschuh, S. (2019). <i>Transforming Complex Sentences into a Semantic Hierarchy</i>. <https://arxiv.org/pdf/1906.01038>

Obendorf, H., & Weinreich, H. (2003). Comparing link marker visualization techniques: changes in reading behavior. <i>Proceedings of the 12th International Conference on World Wide Web</i>, 736--745. Presented at the Budapest, Hungary. <https://doi.org/10.1145/775152.775255>

Ohala, J. (1990). There is no interface between phonology and phonetics. <i>Journal of Phonetics, 18</i>(2), 153--171. <https://doi.org/10.1016/s0095-4470(19)30399-7>

Overstreet, M., & Yule, G. (2023). Associative plural marking in English varieties. <i>English Today, 40</i>(2), 122--126. <https://doi.org/10.1017/s0266078423000354>

Oxford Royale. (2020, September 11). <i>Why is English so hard to learn?</i> Oxford Royale Academy. <https://www.oxford-royale.com/articles/learning-english-hard>

Pona, T. (2005). <i>the language of good--the simple way of life</i>. <https://www.academia.edu/download/32488651/toki-pona-lessons.pdf>

Pona, T. (2024). <i>Toki Pona as a Small World Language</i>. <https://tokipona.org/small_world_language.html>

Schreyer, C. (2021). Constructed languages. <i>Annual Review of Anthropology, 50</i>(1), 327--344. <https://doi.org/10.1146/annurev-anthro-101819-110152>

Siddharthan, A. (2006). Syntactic simplification and text cohesion. <i>Research on Language and Computation, 4</i>(1), 77--109. <https://doi.org/10.1007/s11168-006-9011-1>

Jaeger, T. F., & Tily, H. (2010). On language 'utility': processing complexity and communicative efficiency. <i>Wiley Interdisciplinary Reviews Cognitive Science, 2</i>(3), 323--335. <https://doi.org/10.1002/wcs.126>

## Appendix 2: Translations

### 'Het allermooiste cadeau'

<blockquote class="source">
    <i>Het was een bijzondere dag en Ming wilde zijn beste vriend Tibbe een cadeau geven. Maar wat moest het worden? Een etensbak had hij al. Hij had al een mand en een kauwspeeltje. Hij had alles al. Ming piekerde zich suf. Wat geef je aan iemand die alles al heeft? Niets! Wat is er beter dan niets? Maar waar vind je niets in een wereld vol met iets? Ming hoorde Frank vaak zeggen dat er niets op tv was. Maar voor zover hij het kon bekijken was er altijd wel iets op tv. Ming hoorde Suzie en haar vriendinnen zeggen dat ze niets te doen hadden. Maar voor zover hij het kon bekijken was iedereen altijd wel iets aan het doen.</i> [...truncated]
</blockquote>

ʌreʟ en sɔʟ nenɔrmuto эn Ming wɔʟeʟ ɥy giveʟ en kado vɔr ʟλn amy bɔnbɔnbɔn nɔmo Tibbe. da ȿasyreʟ? hэbeʟ en eskɑ-boʟe. hэbeʟ en mɑnde эn en xerɑ-ludo. hэbeʟ ʌʟ. Ming pэneʟ din. dɑ gived ku vɔr en Σmʌn hэbo ʌʟ. niʟ! dɑ ʌreʟ ku bɔnbɔn dʌn niʟ? dɑ kσ findeʟ niʟ inder en wθd ʌpo ɑfэros? Ming hɔreʟ ɥy Frank sædeʟ ɥy ʌreʟ niʟ inder de tλʟe-vydo. ɥэt, vyseʟ ʌʟdΣm ɑfэros inder de tλʟe-vydo. Ming hɔreʟ ɥy Suzie эn ʟλn ɑmys sædeʟ hэbeʟ niʟ ɥy tθneʟ. ɥэt, ʌʟmʌn tθneʟ ʌʟdΣm ɑfэros.

### 'Charlie and the Chocolate Factory'

<blockquote class="source">
    <i>These two very old people are the father and mother of Mr Bucket. Their names are Grandpa Joe and Grandma Josephine. And these two very old people are the father and mother of Mrs Bucket. Their names are Grandpa George and Grandma Georgina. This is Mr Bucket. This is Mrs Bucket. Mr and Mrs Bucket have a small boy whose name is Charlie Bucket. This is Charlie. How d'you do? And how d'you do? And how d'you again? He is pleased to meet you. The whole of this family – the six grown-ups (count them) and little Charlie Bucket – live together in a small wooden house on the edge of a great town.</i> [...truncated]
</blockquote>

dλses Σmʌnes din odu ʌrev de ɑdɑ эn de ʌmɑ vɔn Σmy Bucket. vΣn nɔmes ʌrev odɑ Joe эn omɑ Josephine. эn dλses Σmʌnes din odu ʌrev de ɑdɑ эn de ʌmɑ vɔn Σmɑ Bucket. vΣn nɔmes ʌrev odɑ George эn omɑ Georgina. dλs ʌreʟ Σmy Bucket. dλs ʌreʟ Σmɑ Bucket. Σmy эn Σmɑ hэbev en Σmy ʟiʟ nɔmo Charlie Bucket. dλs ʌreʟ Charlie. dɑ ʌrem kɑ? эn, dɑ ʌrem kɑ? эn rλ, dɑ ʌrem kɑ? ʌred bΣto ɥy vθsem dy. de fʌmʟy ʌpo – de эsɑ ɑdos (xɑ kʌʟe vΣ) эn de Charlie Bucket ʟiʟ – hɑbytev эnsɑmo inder en bσwɑ wot ʟiʟ nэstσȿ en stэte wɔp.

### 'The Chronicles of Narnia: The Magician’s Nephew'

<blockquote class="source">
    <i>This is a story about something that happened long ago when your grandfather was a child. It is a very important story because it shows how all the comings and goings between our own world and the land of Narnia first began. In those days Mr. Sherlock Holmes was still living in Baker Street and the Bastables were looking for treasure in the Lewisham Road. In those days, if you were a boy you had to wear a stiff Eton collar every day, and schools were usually nastier than now. But meals were nicer; and as for sweets, I won’t tell you how cheap and good they were, because it would only make your mouth water in vain. And in those days there lived in London a girl called Polly Plummer. She lived in one of a long row of houses which were all joined together. One morning she was out in the back garden when a boy scrambled up from the garden next door and put his face over the wall. Polly was very surprised because up till now there had never been any children in that house, but only Mr. Ketterley and Miss Ketterley, a brother and sister, old bachelor and old maid, living together. So she looked up, full of curiosity. The face of the strange boy was very grubby. It could hardly have been grubbier if he had first rubbed his hands in the earth, and then had a good cry, and then dried his face with his hands. As a matter of fact, this was very nearly what he had been doing.</i> [...truncated]
</blockquote>

dλs ʌreʟ en histɔru uber en ɑfэro ɥy hэpeʟ ɔm ɑtσw din. ɑtσw, dyn odɑ ʌreʟ en kido. ʌreʟ en histɔru impo kʌs ɥy ȿoweʟ ɥy hэpɑs ʌʟ tikse wyn wθd эn de ʟʌnde vɔn Narnia kɔmev эdθn. ɔm dʌts sɔʟes, Σmy Sherlock Holmes hɑbytʌʟ ɑturo эt Baker Street эn de Bastables sukʌm ȿɑsoxu эt de Lewisham Road. ɔm dʌtes sɔʟes, if ʌrʌd en Σmy ʟiʟ, musɔd ɥy wæred en vestθ nevydo ɔm sɔʟ ʌʟ эn ekɔʟes ʌrʌv dindΣm womwom dʌn ɑnσ. ɥэt, eskɑkos ʌrʌv bonbon; эt kæntys, sædem ne ɥy kæntys ʌrʌv kɑ xypuxypu эt kɑ ɥemɥem. kʌs ȿʌʟev ɥy nλɥev dyn ɔro. эn ɔm dʌts sɔʟes, en Σmɑ ʟiʟ nɔmo Polly Plummer hɑbyteʟ эt London. hɑbyteʟ inder en эdrʌn us en row ʌro bσwo ɥono эnsɑmo. ɔm эdrʌn kɔmosɔʟ, ʌrʌʟ inder de hinder-kurɑ kΣ ɥy en Σmy ʟiʟ vyɑsy de nэsder-kurɑ vyseʟ vybovder de wɔʟ. Polly ʌrʌʟ sepryso din kʌs ɥy dΣmɑ nσ, kidos ʌrʌv niʟdΣm inder dʌt bowɑ. ʟono, Σmy Ketterley эn Σmɑ Ketterley, en nybo эn en sis, en Σmy эn en Σmɑ, hɑbytɑv эnsɑmo. dʌs, Polly vysɑʟ vyup ɑn kʌdkuro. The fλs vɔn de nefʌmʟɑ Σmy ʌrʌʟ ȿefugo. kэneʟ ne ȿefugoȿefugo eku ɥy de Σmy tσȿeʟ de эrde mэt ʟyn hʌndes, kyreʟ, эn rλɥeʟ ʟyn fλsu mэt ʟyn hʌndes. afэkto, dʌt ʌrʌʟ finɑ ku hэpo.

## Appendix 3: Results from the survey

![Welke talen spreek je vloeiend?](https://cdn.geheimesite.nl/images/iconic/survey0.png)
![Ben je meertalig opgevoed?](https://cdn.geheimesite.nl/images/iconic/survey1.png)
