---
title: "Style Guide"
translationKey: style-guide
hideFromGoogle: true
---

This is the Manual of Style for all pages on [geheimesite.nl](https://geheimesite.nl/en), across the entire project. This page is split into a few sections that cover typography, spacing and color use. This page is inspired by [The Hoorn Manual of Style](https://satyrs.eu/styleguide) and the [style guide on unindented.org](https://www.unindented.org/about/style-guide/).

(Written by [Daniel Perez Alvarez](https://unindented.org). Modified by Robin Boers. Licensed [CC BY-SA](https://creativecommons.org/licenses/by-sa/4.0/))

## Spelling

Prefer american version of words over britisch versions. Prefer _-ize_ over _-ise_.

### Measurements

Use the metric system everywhere. Other systems are infiriour. Don't use them. C'mon. Please.

Prefer to use the word instead of the digit for numbers, unless it is followed by an unit:

> three milliliters, but 3 mL and `1.2V`

Only use a space before the unit for common measurements (like liter, meter). Use inline code blocks for technical info (like gigabytes, volts, ampères)

### Oxford comma

On the english pages, use the Oxford comma. On the dutch pages however, do not use it, since it is incorrect by dutch spelling.

### Passive

Prefer not to use the passive unless it makes a big difference in the delivery of the message or it fits the context.

### Capitalization

Prefer downcase over upcase. Always capitalize the pronoun I. Lowercase I can be used in certain contexts where it is used as a stylistic choice to make the content look low-effort.

## Headings

Page header should use a `p` element with the `title` class. The title of the page should use `h1` and be on top of the content and below the header. Sub-sections can be marked using `h2` and a single page shouldn't contain more than 6 sub-sections.

The margin below headings may only be reduced if there is a subtitle that has padding below (like on [the YouTube page](/youtube)).

The main page header of this guide is an `h1` element. Any header elements may include links.

## Sections

The secondary header above is an `h2` element, which may be used for any form of important page-level header. Consider using an `h2` unless you need a header level of less importance, or as a sub-header to an existing `h2` element.

### Third-level header

The header above is an `h3` element, which may be used for any form of page-level header which falls below the `h2` header in a document hierarchy.

#### Fourth-level header

The header above is an `h4` element, which may be used for any form of page-level header which falls below the `h3` header in a document hierarchy.

##### Fifth-level header

The header above is an `h5` element, which may be used for any form of page-level header which falls below the `h4` header in a document hierarchy.

###### Sixth-level header

The header above is an `h6` element, which may be used for any form of page-level header which falls below the `h5` header in a document hierarchy.

## Structural elements

### Paragraphs

All paragraphs are wrapped in `p` tags. Additionally, `p` elements can be wrapped with a `blockquote` element if the `p` element is indeed a quote.

### Blockquotes

The `blockquote` element represents a section that is being quoted from another source:

> Many forms of Government have been tried, and will be tried in this world of sin and woe. No one pretends that democracy is perfect or all-wise. Indeed, it has been said that democracy is the worst form of government except all those other forms that have been tried from time to time.
>
> --- Winston Churchill, in [a speech to the House of Commons](https://api.parliament.uk/historic-hansard/commons/1947/nov/11/parliament-bill#column_206) (11th November 1947)

### Horizontal rules

The `hr` element represents a paragraph-level thematic break, for example a scene change in a story, or a transition to another topic within a section of a reference book. The following extract from _Pandora's Star_ by Peter F. Hamilton shows two paragraphs that precede a scene change and the paragraph that follows it:

> Dudley was ninety-two, in his second life, and fast approaching time for another rejuvenation. Despite his body having the physical age of a standard fifty-year-old, the prospect of a long degrading campaign within academia was one he regarded with dread. For a supposedly advanced civilization, the Intersolar Commonwealth could be appallingly backward at times, not to mention cruel.
>
> _Maybe it won't be that bad_, he told himself. The lie was comforting enough to get him through the rest of the night's shift.
>
> ---
>
> The Carlton AllLander drove Dudley home just after dawn. Like the astronomer, the vehicle was old and worn, but perfectly capable of doing its job. It had a cheap diesel engine, common enough on a semi-frontier world like Gralmond, although its drive array was a thoroughly modern photoneural processor. With its high suspension and deep-tread tyres it could plough along the dirt track to the observatory in all weather and seasons, including the metre-deep snow of Gralmond's winters.

Horizontal rules are also allowed after the introduction, just before the main content of a page starts.

## List elements

### Ordered lists

The `ol` element denotes an ordered list. Each item requires a surrounding `li` tag, to denote individual items within the list.

Here is an example list showing the monarchs of Great Britain and the United Kingdom:

1.  House of Stuart
    1.  Anne
2.  House of Hanover
    1.  George I
    2.  George II
    3.  George III
    4.  George IV
    5.  William IV
    6.  Victoria
3.  House of Saxe-Coburg and Gotha
    1.  Edward VII
4.  House of Windsor
    1.  George V
    2.  Edward VIII
    3.  George VI
    4.  Elizabeth II

### Unordered lists

The `ul` element denotes an unordered list (i.e. a list of loose items that don't require numbering, or a bulleted list). Again, each item requires a surrounding `li` tag, to denote individual items.

Here is an example list showing the constituent parts of the British Isles:

-   United Kingdom of Great Britain and Northern Ireland:
    -   England
    -   Scotland
    -   Wales
    -   Northern Ireland
-   Republic of Ireland
-   Isle of Man
-   Channel Islands:
    -   Bailiwick of Guernsey
    -   Bailiwick of Jersey

Sometimes you may want each list item to contain block elements, typically a paragraph or two:

-   The British Isles is an archipelago consisting of the two large islands of Great Britain and Ireland, and many smaller surrounding islands.

-   Great Britain is the largest island of the archipelago. Ireland is the second largest island of the archipelago and lies directly to the west of Great Britain.

-   The full list of islands in the British Isles includes over 1,000 islands, of which 51 have an area larger than 20 km<sup>2</sup>.

## Table elements

Tables should be used when displaying tabular data. The `thead`, `tfoot` and `tbody` elements enable you to group rows within each table.

If you use these elements, you must use every element. They should appear in this order: `thead`, `tfoot` and `tbody`, so that browsers can render the foot before receiving all the data. You must use these tags within the `table` element.

Example with Team GB's London 2012 medal table:

<table>
<thead>
    <tr>
    <th scope="col">Sport</th>
    <th scope="col">Gold</th>
    <th scope="col">Silver</th>
    <th scope="col">Bronze</th>
    <th scope="col">Total</th>
    </tr>
</thead>
<tfoot>
    <tr>
    <td>Total</td>
    <td>29</td>
    <td>17</td>
    <td>19</td>
    <td>65</td>
    </tr>
</tfoot>
<tbody>
    <tr>
    <td>Athletics</td>
    <td>4</td>
    <td>1</td>
    <td>1</td>
    <td>6</td>
    </tr>
    <tr>
    <td>Boxing</td>
    <td>3</td>
    <td>1</td>
    <td>1</td>
    <td>5</td>
    </tr>
    <tr>
    <td>Canoe Slalom</td>
    <td>1</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    </tr>
    <tr>
    <td>Canoe Sprint</td>
    <td>1</td>
    <td>0</td>
    <td>1</td>
    <td>2</td>
    </tr>
    <tr>
    <td>Cycling — Road</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>3</td>
    </tr>
    <tr>
    <td>Cycling — Track</td>
    <td>7</td>
    <td>1</td>
    <td>1</td>
    <td>9</td>
    </tr>
    <tr>
    <td>Diving</td>
    <td>0</td>
    <td>0</td>
    <td>1</td>
    <td>1</td>
    </tr>
    <tr>
    <td>Equestrian</td>
    <td>3</td>
    <td>1</td>
    <td>1</td>
    <td>5</td>
    </tr>
    <tr>
    <td>Gymnastics - Artistic</td>
    <td>0</td>
    <td>1</td>
    <td>3</td>
    <td>4</td>
    </tr>
    <tr>
    <td>Hockey</td>
    <td>0</td>
    <td>0</td>
    <td>1</td>
    <td>1</td>
    </tr>
    <tr>
    <td>Judo</td>
    <td>0</td>
    <td>1</td>
    <td>1</td>
    <td>2</td>
    </tr>
    <tr>
    <td>Modern Pentathlon</td>
    <td>0</td>
    <td>1</td>
    <td>0</td>
    <td>1</td>
    </tr>
    <tr>
    <td>Rowing</td>
    <td>4</td>
    <td>2</td>
    <td>3</td>
    <td>9</td>
    </tr>
    <tr>
    <td>Sailing</td>
    <td>1</td>
    <td>4</td>
    <td>0</td>
    <td>5</td>
    </tr>
    <tr>
    <td>Shooting</td>
    <td>1</td>
    <td>0</td>
    <td>0</td>
    <td>1</td>
    </tr>
    <tr>
    <td>Swimming</td>
    <td>0</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    </tr>
    <tr>
    <td>Tennis</td>
    <td>1</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    </tr>
    <tr>
    <td>Taekwondo</td>
    <td>1</td>
    <td>0</td>
    <td>1</td>
    <td>2</td>
    </tr>
    <tr>
    <td>Triathlon</td>
    <td>1</td>
    <td>0</td>
    <td>1</td>
    <td>2</td>
    </tr>
</tbody>
</table>

### Form elements

Forms can be used when you wish to collect data from users. The `label` element is not used in favor of descriptive `placeholder` attributes, because it declutters the UI a fair bit.

Example with different types of inputs:

<form>
  <input type="text" name="text" class="input" placeholder="Your name..." />
  <input type="email" name="email" placeholder="john.doe@example.com" class="input" />
  <input type="text" readonly name="readonly" value="This input is read-only" class="input" />
  <input type="text" disabled name="disabled" value="This input is disabled" class="input" />
  <textarea name="textarea" class="input" placeholder="Your message..."></textarea>
  <select name="dropdown" class="input">
    <option selected disabled>Please choose one</option>
    <option>One</option>
    <option>Two</option>
    <option>Three or more</option>
  </select>

  <label class="form-label-inline">
    <input type="radio" name="radio" value="radio-1" checked class="form-radio" />
    <span>One</span>
  </label>
  <label class="form-label-inline">
    <input type="radio" name="radio" value="radio-2" class="form-radio" />
    <span>Two</span>
  </label>
  <label class="form-label-inline">
    <input type="radio" name="radio" value="radio-3" class="form-radio" />
    <span>Three or more</span>
  </label>

  <br>

  <label class="form-label-inline">
    <input type="checkbox" name="checkbox-1" class="form-checkbox" />
    <span>Unchecked</span>
  </label>
  <label class="form-label-inline">
    <input type="checkbox" name="checkbox-2" checked class="form-checkbox" />
    <span>Checked</span>
  </label>

  <div>
    <button type="button" class="input button">Submit</button>
    <button type="reset" class="input button">Reset</button>
  </div>
</form>

## Media elements

### Image

The `img` element embeds an image into the document. The `src` attribute is required, and contains the path to the image you want to embed.
The `alt` attribute holds a text description of the image, which is required to make the site accesible to all visitors.

Images are presented full-width, and must be encapsulated in a `figure` element:

{{< screenshot repo="VSKodium" >}}

### Inline frame

The `iframe` element represents a nested browsing context, embedding another HTML page into the current one. It behaves the same as an image. Example:

{{< video id="5FoCYP8VX8I" class="w-full" >}}

## Text formatting elements

### Links and anchors

The `a` element is used to hyperlink text, be that to another page, a named fragment on the current page or any other location on the web.

Hyperlinks should be clearly marked, and should use different styles in `active` and `hover` states. The inner text or content of a hyperlink should clearly describe the page it is pointing at. Either by including the URI itself, the pagename or a part of a sentence.

Example:

[Go to the home page](/en) or [return to the top of this page](#content).

### Italics

Text you emphasize in a natural sentence should be marked up using `em`, while `i` is used if the italic is just for stylistics effects.

> The `i` element is used for text in an alternate voice or mood, or otherwise offset from the normal prose. Examples include taxonomic designations, technical terms, idiomatic phrases from another language, the name of a ship or other spans of text whose typographic presentation is typically italicised. Example:

Examples:

You simply _must_ try the negitoro maki!

There is a certain <i>je ne sais quoi</i> in the air.

### Bold text

Text should only be bold if it is an exaggration, not just to emphasize it. Use the `strong` element for this purpose.

Bold text can also be used to mark important words in an text. Prefer to use `b` with the bold class in that case.

**Don't** stick nails in the electrical outlet.

My projects are all <b class="bold">open-source</b>, and can be found on my GitHub profile.

### Definitions

The `dfn` element is used to highlight the first use of a term. The `title` attribute can be used to describe the term. Example:

Bob's <dfn title="Dog">canine</dfn> mother and <dfn title="Horse">equine</dfn> father sat him down and carefully explained that he was an <dfn title="A mutation that combines two or more sets of chromosomes from different species">allopolyploid</dfn> organism.

The site also has a handy component for rendering semantic HTML definitions:

{{< definition word="Hypertexting" pronunciation="hʌɪpətɛkstɪŋ" type="verb" definition="Constructing a body of hypertext over time—such as with blogs or wikis—with an emphasis on the strengths of linking (within and without the text) and rich formatting." >}}

### Citations

The `cite` element is used to represent the title of a work (for example a book, essay, poem, song, film, TV show, sculpture, painting, musical, exhibition, etc.). This can be a work that is being quoted or referenced in detail, or it can just be a work that is mentioned in passing. Example:

<cite>Universal Declaration of Human Rights</cite>, United Nations, December 1948. Adopted by General Assembly resolution 217 A (III).

### Edits

The `del` element is used to represent deleted or retracted text which still must remain on the page for some reason. Meanwhile its counterpart, the `ins` element, is used to represent inserted text. Example:

As a result, <del>Kodos</del> <ins>Kang</ins> was elected president.

### Superscript and subscript text

The `sup` element represents a superscript and the sub element represents a `sub`. These elements must be used only to mark up typographical conventions with specific meanings, not for typographical presentation. As a guide, only use these elements if their absence would change the meaning of the content. Example:

Chemical formulas are written using subscripts (for example C<sub>6</sub>H<sub>12</sub>O<sub>6</sub>), but atomic isotopes are written using superscripts (for example <sup>13</sup>C, <sup>131</sup>I, and <sup>238</sup>U).

### Small print

The `small` element is used to represent disclaimers, caveats, legal restrictions, or copyrights (commonly referred to as 'small print'). It can also be used for attributions or satisfying licensing requirements. Example:

<small>Copyright (C) 1912-2012 Acme Corporation. All Rights Reserved.</small>

### Time

The `time` element is used to represent either a time on a 24-hour clock, or a precise date in the proleptic Gregorian calendar, optionally with a time and a time-zone offset. Example:

Queen Elizabeth II was proclaimed sovereign of each of the Commonwealth realms on <time datetime="1952-02-06">6</time> and <time datetime="1952-02-07">7 February 1952</time>, after the death of her father, King George VI.

### Keyboard entry

The `kbd` element is used to denote user input (typically via a keyboard, although it may also be used to represent other input methods, such as voice commands). Example:

To take a screenshot on your Mac, press <kbd>⌘ Cmd</kbd> + <kbd>⇧ Shift</kbd> + <kbd>3</kbd>.

### Pre-formatted text

The `pre` element represents a block of pre-formatted text, in which structure is represented by typographic conventions rather than by elements. Here's an example showing the printable characters of ASCII:

      ! " # $ % & ' ( ) * + , - . /
    0 1 2 3 4 5 6 7 8 9 : ; < = > ?
    @ A B C D E F G H I J K L M N O
    P Q R S T U V W X Y Z [ \ ] ^ _
    ` a b c d e f g h i j k l m n o
    p q r s t u v w x y z { | } ~

### Code

Filename should use the `code` tag. Tagnames should use the `code` tag. Code snippets should use `<pre><code>`, or just `code` if it is inline.

Further use of `<code>` depends on the situation. Text inside a `code` tag should be monospaced.

Use inline code blocks for technical units (see spelling example earlier).

Examples:

The [`requestAnimationFrame`](https://developer.mozilla.org/docs/Web/API/window/requestAnimationFrame) method in the `window` object tells the browser that you wish to perform an animation and requests that the browser call a specified function to update an animation before the next repaint.

### Code blocks

The `code` element can also be used in conjunction with the `pre` element to represent verbatim text like markup or a fragment of computer code. Example:

```
function microsoftShuffle(arr) {
  return arr.slice().sort(function () {
    return (0.5 - Math.random());
  });
}
```

You may choose to display line numbers next to the code. Example:

```javascript
function microsoftShuffle(arr) {
    return arr.slice().sort(function () {
        return 0.5 - Math.random();
    });
}
```

You may also specify the language of a code block, so that it can be properly highlighted. Below you can find the classic _Hello World_ program implemented in different languages.

#### Bash

```bash
#!/bin/bash
echo "Hello, world!"
```

#### C

```c
#include <stdio.h>
int main(int argc, char *argv[]) {
  printf("Hello, world!\n");
  return 0;
}
```

#### C++

```cpp
#include <iostream>
using namespace std;
int main() {
  cout << "Hello, world!" << endl;
  return 0;
}
```

#### C&#35;

```csharp
using System;
class Program {
  public static void Main() {
    Console.WriteLine("Hello, world!");
  }
}
```

#### Clojure

```clojure
(println "Hello, world!")
```

#### CSS

```css
body::before {
    content: "Hello, world!";
}
```

#### Diff

```diff
diff --git a/foo.txt b/foo.txt
index c62237e..af5626b 100644
--- a/foo.txt
+++ b/foo.txt
@@ -1 +1 @@
-Goodbye, world!
+Hello, world!
```

#### Elixir

```elixir
IO.puts "Hello, world!"
```

#### Elm

```elm
import Text
main = Text.plainText "Hello, world!"
```

#### Erlang

```erlang
io:format("~s~n", ["Hello, world!"])
```

#### F&#35;

```fsharp
printf "Hello, world!\n"
```

#### Go

```go
package main
import "fmt"
func main() {
  fmt.Println("Hello, world!")
}
```

#### Haskell

```haskell
main = putStrLn "Hello, world!"
```

#### HTML

```html
<!DOCTYPE html>
<html>
    <body>
        Hello, world!
    </body>
</html>
```

#### Java

```java
public class HelloWorld {
  public static void main(String[] args) {
    System.out.println("Hello, world!");
  }
}
```

#### JavaScript

```javascript
console.log("Hello, world!");
```

#### Julia

```julia
println("Hello, world!")
```

#### Kotlin

```kotlin
fun main(args : Array<String>) {
  println("Hello, world!")
}
```

#### Lisp

```lisp
(princ "Hello, world!")
```

#### Lua

```lua
print("Hello, world!")
```

#### Objective-C

```objectivec
#import <stdio.h>
int main(void) {
  printf("Hello, world!\n");
  return 0;
}
```

#### Perl

```perl
print "Hello, world!";
```

#### PHP

```php
<?= 'Hello, world!' ?>
```

#### Python

```python
print "Hello, world!"
```

#### R

```r
cat('Hello, world!')
```

#### Ruby

```ruby
puts "Hello, world!"
```

#### Rust

```rust
fn main() {
  println!("Hello, world!");
}
```

#### Scala

```scala
object HelloWorld extends App {
  println("Hello, world!")
}
```

#### Scheme

```scheme
(display "Hello, world!")
```

#### Shell

```sh
echo 'Hello, world!'
```

#### Smalltalk

```smalltalk
Transcript show: 'Hello, world!'.
```

#### Swift

```swift
println("Hello, world!")
```

#### TypeScript

```typescript
console.log("Hello, world!");
```

### Warnings

You can use warnings to highlight important information that the user shouldn't miss. Example:

{{< warning >}}
Download "Source code (zip)" and not `package.zip`!  
`package.zip` is for online updating and doesn't work on it's own.
{{< / warning >}}

### Info boxes

Info boxes can be used to present extra information or sidenotes. Example:

{{< info "This post might get very technical." / >}}

## Layout

Pages should use a simple top-to-bottom layout with a single column. The width for the text should be max `650px`. The width for the rest of the content should be `1100px`.

Note that the only blocks that are allowed to escape these rules are images. They can be floated or put beside the text (like on the [about page](/en/about)).

### Main menu

Pages should have the default main menu at the top. The only pages to not use this menu are a) the homepage, because it needs to house a lot more links and b) pages using a seperate layout (read more below).

### Footnotes

Footnotes should be at the bottom of pages, as that is what I, and users, are used to. They're called **foot**notes for a reason.

They should have links with bookmark things to jump between content and foot note.

### Errors

There is a 404 page, but I hope you'll never see it (altough I have a lot of broken links).

### Other layouts

Pages that are seperate from the main site are allowed to use a different layout. A good way to check wether a page is "seperate" is to check wether it is directly linked to from normal page in a meaningfull way. Notable examples are:

-   [Hyperfeed](/hyperfeed)
-   [Videoroll](/en/youtube)

Other exceptions are the `/me` page and the homepage, since those serve a different purpose and thus have different needs.

## Styling

### Fonts

Use serif for main content. Use <span class="font-poppins">sans-serif</span> for main headings. Use <span class="font-fira">cursive sans-serif</span> for subheadings. Use a <span class="font-display">display font</span> for the site title in the header.

### Colors

All pages part of geheimesite.nl should use the main color scheme defined in [the tailwind config file](https://github.com/RobinBoers/geheimesite.nl/blob/master/tailwind.config.js). The main color scheme is displayed below:

-   <input type="color" value="#131324"> Foreground color (defined as `--foreground)
-   <input type="color" value="#f3f8ff"> Background color (defined as `--background`)
-   <input type="color" value="#ff4d79"> Accent color (defined as `--primary`)

In dark mode I use this color scheme:

-   <input type="color" value="#f3f8ff"> Foreground color (defined as `--foreground`)
-   <input type="color" value="#131324"> Background color (defined as `--background`)
-   <input type="color" value="#ff4d79"> Accent color (defined as `--primary`)

### Exceptions

Pages can use a different color scheme if they are clearly not part of the main site, or cover a different topic that is unrelated to the subject of the main site. Most of these pages also use a different layout.

Lastly, it is your right, as the designer to ignore this rule as you see fit as part of your own creative freedom noted below.

{{< info "It should be noted however, that to keep the site consistent the color scheme should deviate from the default color schema as little as possible to ensure a not-lost user." / >}}

## Ignore these rules

If these rules make the design look worse, please ignore them. It is in your own creative freedom to decide wether you want to use this design system, or to deviate from it.

I do have to add to this, that to ensure a consistent and clear user experience these rules should be followed as close as possible.
