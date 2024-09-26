<!DOCTYPE html>
<html lang="EN">

<!--toto php funguje len s includmi z incyh suborov --->

<head>
    @include('layout.head') <!--includne sa nav head z ineho suboru --->
</head>

<body>
    <nav>
    @include('layout.nav')  <!--includne sa nav bar z ineho suboru --->
</nav>

    @include('layout.footer') <!--includne sa nav footer z ineho suboru --->
</body>

</html>
