# Intrepid Group Sample Application Solution

Final version is hosted here http://35.231.56.196/

### TO run this code
    composer install
    php -S localhost:8000

### Explanation
Since most of the tasks are related to data filtering and rendering, changes to the original JavaScript were needed. I have used `angular.js version 1.7.2` for this purpose as it allows us to create the needed functionalities with relatives lesser code.
Below is the explaination of the solution of the tasks.

### Task 1. Only show English Language books

Code diff: https://github.com/koustubh25/intrepid-group-application/compare/task0...task1

1. A public function `getAll()` is written inside the `Book` entity because private variables inside it were not json serializable in twig.
2. In `StaticRepository.php`, the above function was called.
3. In `Header.twig`, angular app was initialised in the JS part and the data was injected from twig to JS using this DOM element `<div class="bookset"  data-books="{{ books|json_encode() }}">` in `homepage.twig`
4. Finally, `ng-repeat` directive was used to populate the table with values from Step 3
5. `select` tag allowed to set a `ng-model`, based on it's value a filter was added in `ng-repeat`.

### Task 2. Sort books by year of publication

Code diff: https://github.com/koustubh25/intrepid-group-application/compare/task1...task2

1. Here, `orderBy` was added to order the table results based on `orderByField` which is set to `year`

### Task 3. Sort books by any column

Code diff: https://github.com/koustubh25/intrepid-group-application/compare/task2...task3

1. To sort books by any column a `<a>` tag was added to simply set the value of `orderByField`
2. To decide the order of the sort (asc/desc), I simply used a `reverseSort` variable which toggles everytime on click.
3. Appropriately, `ng-show` and `ng-hide` tags were written to show either `v` or `^`.

### Task 4. Zebra-Stripe the table rows and add a hover to the table rows

Code diff: https://github.com/koustubh25/intrepid-group-application/compare/task3...task4

1. `table-striped table-hover` - These were readymade css classes available through bootstrap.js for `table`

### Task 5. Hide the Author column when the page is viewed on mobile

Code diff: https://github.com/koustubh25/intrepid-group-application/compare/task4...task5

1. `hidden-xs hidden-sm` These classes were available from bootstrap.js library
2. `class="col-md-3"` This was added to make fixed width columns for the table as they changed size after a sort.
