<html>
<head>
<script type="text/javascript" src="tremenu.js"></script>

<style type="text/css">
.treeview ul {
    margin: 0;
    padding: 0;
}

.treeview li {
    background: white url(list.gif) no-repeat left center;
    list-style-type: none;
    padding-left: 22px;
    margin-bottom: 3px;
}

.treeview li.submenu {
    background: white url(closed.gif) no-repeat left 1px;
    cursor: hand !important;
    cursor: pointer !important;
}

.treeview li.submenu ul {
    display: none;
}

.treeview .submenu ul li {
    cursor: default;
}</style>
<body>
<h4> Menu Tree Simple</h4>

<ul id="treemenu1" class="treeview">
<li> Home </li>
<li> Profil </li>

<li> Kategori
    <ul>
    <li> <a href='http://indo-webst.blogspot.com'>PHP Indonesia </a></li>
    <li> PHP </li>
    <li> CSS </li>
    <li> Delphi </li>
    </ul>
</li>
<li> Kontak </li>

<li> Info 
    <ul>
    <li> PHP Indonesia adalah blog pemula </li>
    <li> Css dynamiic </li>
    <li> Mudah Belajar PHP</li>
    </ul>
</li>
<li> Download </li>
</ul>
<script type="text/javascript">
ddtreemenu.createTree("treemenu1", true)
ddtreemenu.createTree("treemenu2", false)
<!-- http://indo-webst.blogspot.co.id/2015/06/cara-membuat-menu-dtree-dengan-php.html -->
</script>
</body>
</html>

