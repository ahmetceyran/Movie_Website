<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    @include('admin.css')

  </head>
  <body>

    @include('admin.sidebar')
      <!-- partial -->

        <!-- partial:partials/_navbar.html -->

        @include('admin.navbar')

        <!-- partial -->

        @include('admin.body')

          <!-- partial -->
        @include('admin.script')

  </body>
</html>
