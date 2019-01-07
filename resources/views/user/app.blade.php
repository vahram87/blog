<!DOCTYPE html>
<html lang="hy">

  <head>
   @include("user/layouts/head")
  </head>

  <body>

    <!-- Navigation -->
    @include("user.layouts.header")

    @section("mine-content")
      @show

    @include("user.layouts.footer")
    

  </body>

</html>
