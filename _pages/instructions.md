---
layout: single
title: Instructions for editing the website
permalink: /instructions/
---

<style type="text/css">
.instructions-img {
  width: 620px;
}
.todo {
  color: red;
  font-weight: bold
}
</style>

## Contributing

Thank you for helping with the sui.acm.org website. The easiest way
for you to contribute to the website is to edit the file you want to
change, directly in your browser.  What will happen behind the scenes
after you're done with an edit is that GitHub will automatically
create a "pull request" from your edit, which will let us know that
you would like to update some of the
content. [Here is a simple guide](https://help.github.com/articles/editing-files-in-another-user-s-repository/)
to editing files in another user's repository.

### How to change an existing page

The *easiest* way to suggest a change is to go on the bottom of the page you want to change and click on "file a bug". You will be taken to the GitHub website where you can describe the problem, and <span style="todo">web@</span> will get a notification when the bug is filed.

The *best* way to suggest a change is to go on the bottom of the page you want to change and click on "suggest a fix". You will again be taken to GitHub. For this one you will be asked to log in to a GitHub account. Then you can do your edits.

After you’re done making the edits, you’ll go to the bottom of the page to commit your changes  *to a new branch*.

After you click on "Propose file change", you’ll be taken to a page to describe your pull request. After clicking "Create Pull Request", <span style="todo">web@</span> gets both a bug report and a proposed change.

If the change is simple, we’ll simply say "OK". If the change requires reviewers, we can ask for people to comment on the thread. After everyone says OK, we merge the change and then we will be able to push it to the website.

## Policies

### By default, web chairs are not responsible for content

Please do not contact web chairs with requests that include decisions over content. For example, "improve the text on page XYZ" is not a reasonable request to be made to <span style="todo">web@</span>; it's a request to be made to whoever is the responsible party.

Please do not contact web chairs with requests such as "please add this content to the web site. You can decide where it goes". The web chairs are responsible for making sure the website is running smoothly, together with the rest of the web infrastructure. They are not responsible for content. You should contact them with, at least:

- the URL where you want the page to go,
- the specific content it should be there,
- and the person who will be in charge of maintaining that content in the future.

### Who's responsible for what?

The point-of-contact for each page in the website is the contact
person in each page's front matter (which is visible on each page by
looking at the footer). 

If a page does not have an assigned contact, then 1) that's likely a
bug that should be reported, 2) <span style="todo">web@</span> is the default
point-of-contact.

This means that if you found a bug on the content of a webpage, you're
welcome to create a pull request for the content to get
fixed. However, if the fix involves anything more than trivial typos,
we will wait for an OK from the point-of-contact before committing the
changes.
