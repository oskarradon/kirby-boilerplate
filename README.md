# Kirby Boilerplate

## Description

A simple Kirby CMS boilerplate for portfolio sites. Loosely built upon [HTML5 Boilerplate](https://html5boilerplate.com/). Uses the [blocks](https://getkirby.com/docs/reference/panel/fields/blocks) field for project pages.

## Directions

`npm install`, then navigate to your development server (ex: `kirby-boilerplate.test/panel`)and login with `u: test@test.test` `pw: testtest`.

## Plugins & NPM packages used

-   [Link field](https://github.com/OblikStudio/kirby-link-field)
-   [Swiper](https://swiperjs.com/)
-   [Basic Lightbox](https://basiclightbox.electerious.com/)

## Tips

-   Create another admin login and delete test login.
-   Delete `site/ > config/*` for production.
-   Use [Laravel Valet](https://laravel.com/docs/8.x/valet) for an easy development server.
-   Generate a 1200 x 630 (1.9:1) image for [Open graph](https://ogp.me/).
-   and a 1200 x 600 (2:1) image for [Twitter cards](https://developer.twitter.com/en/docs/twitter-for-websites/cards/overview/abouts-cards).
-   Update the info in the `<head>` in `site/ > snippets/ > header/`.
-   Change the color scheme in `assets/css/global/vars.css`.
-   Sign up for [Google Analytics](https://analytics.withgoogle.com/) or delete the script in `site/ > snippets/ > footer/`.
-   Update these files:
    -   `favicon.ico`
    -   `humans.txt`
    -   `site.webmanifest`

## License

MIT
