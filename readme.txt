=== Echo Chamber Comments ===
Contributors: dmchale
Tags: comment, comments, admin, echo, chamber, page, post, posts, user, users, visitor, visitors, replace, local
Requires at least: 3.0
Tested up to: 4.2.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Replace the WordPress comment system with a dummy comment system.

== Description ==

The `Echo Chamber Comments` plugin leverages [echochamber.js](https://github.com/tessalt/echo-chamber-js), a project
on GitHub by [@tessalt](https://github.com/tessalt)

From the project's description:

"Install to add a simple comment form to your blog post or website.

why not just use disqus?

Because then there'd be a chance that someone would read the comments. You might have to read those comments. You
don't want that.

When a user submits a comment, echochamber.js will save the comment to the user's LocalStorage, so when they return to
the page, they can be confident that their voice is being heard, and feel engaged with your very engaging content.
It does not make any HTTP requests. Since LocalStorage is only local, you and your database need not be burdened with
other people's opinions."

== Installation ==

1. Upload the `echo-chamber-comments` directory to the `/wp-content/plugins/` directory via FTP
1. Alternatively, upload the `echo-chamber-comments_v#.#.zip` file to the 'Plugins->Add New' page in your WordPress
admin area
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How does this plugin work? =
A simple script include references a .js file hosted on a third-party server. It then does all the work, with an
iframe that will display the comments form on your site.

= Can I see comments that people submit? =
Nope! All comments are posted to the user's Local Storage, and nothing ever hits your website. As such, there is
no way to see what people are submitting when they fill out the form.

== Screenshots ==

1. An example form with user submissions

== Changelog ==

= 1.0 =
* Initial Release

== Upgrade Notice ==

= 1.0 =
* Initial Release