<?

/*
Exercise 2:
 counting words

Part 1:

Write a function 'countWords($str)' that takes any string of characters
and finds the number of times each word occurs. You should ignorethe distinction
between capital and lowercase letters, and do not have to worry about dealing
with characters that are not letters.

Hint: Create an associative array mapping word keys to the number of times they occur.
You will need to look at PHP's string functions to split a sentence into words.

Hint 2: The print_r($array_name) function is useful for examining the contents
of an array.

Part 2:

in the same file, write a form consisting of a single text field and a submit button.
The "action" attribute to the form should be the same page that the form is on
(don't hard code, use $_SERVER['PHP_SELF']). The form should send the contents of
text field via GET.

Upon submitting the form, you should be redirected to the same page, but the URL
should contain the string from the text field as a GET request normally behaves.

Side note: Prevent security vulnerabilies with $_SERVER['PHP_SELF'].


Part 3:

 Check for the existence of a GET request. If a GET request exists with the name of the
input field that you made before, run the contents of the request through your
countWords($str) function. Take the output array of the function, and display an HTML
table of words and the number of times they occur. Make the table sorted by decreasing
number of occurences.*/
