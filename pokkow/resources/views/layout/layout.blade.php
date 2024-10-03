<!DOCTYPE html>
<html lang="EN">

<!--toto php funguje len s includmi z incyh suborov --->

<head>
    @include('inc.head') <!--includne sa head z ineho suboru --->
</head>

<body>
    <nav>
    @include('inc.nav')  <!--includne sa nav bar z ineho suboru --->
</nav>

    @include('inc.footer') <!--includne sa footer z ineho suboru --->
</body>

</html>
