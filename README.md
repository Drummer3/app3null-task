# App3Null Task

The task was to make user form and to display inputted user list.

With no mention on front-end framework I decided to use [Laravel Blade](https://laravel.com/docs/9.x/blade).
For css I enhanced my experience with [TailwindCSS](https://tailwindcss.com/) and used [SASS](https://sass-lang.com/) for custom classes for inputs and the dashboard table.

---

## Issues

Unfortunately, no documentation was provided for the task, so I had issues:

1. There was no mention on form validation (e.g: age restriction) so I made all the inputs required with correct types.
2. There was style guide for error handling, so when there's an issue with saving (e.g: when putting same email twice database throws an error) we silently redirect user to the form page.
3. There was no mention on country list (e.g: [rest countries](https://restcountries.com)), so I just put Georgia and England as only two options.
4. There was no mention form behavior, (e.g: using **middleware**, or notifying user that form has been successfully submitted), so currently when user information is typed it auto redirects to the `/dashboard` page.
5. There was no mention on focus state, or hover state for neither form inputs or button.
6. There was no high quality image provided for the cloudy background on landing page. So, I used roughly same color background and we can assume that I can handle changing background color to the background image.
7. There was no icons provided for inputs nor little arrow on the background. So, I left input icons untouched so browser will handle it. And for the little arrow I used icon from [Hero Icons](https://heroicons.com/), same team as **tailwindcss**
8. There was no mention on front-end framework usage. So I decided to use **Laravel Blade** to display my Laravel knowledge and I made custom input component. We could assume that I can handle actual front-end frameworks using [InertiaJS](https://inertiajs.com/)

Even though, there was many important questions, I think I handled this task well enough.
