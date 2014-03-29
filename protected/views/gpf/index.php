<?php
  Yii::import('application.vendors.*');
  require_once 'google-api-php-client/src/Google_Client.php';
  require_once 'google-api-php-client/src/contrib/Google_PlusService.php';
  $this->breadcrumbs=array(
    'gpf',
  );
  ?>
  <div class="row">
      <div role="menubar" class="navbar">
        <ul role="menu" class="nav nav-pills sign-up-nav">
          <li role="menuitem">
            <a href="/about_us/">About</a>
          </li>
          <li role="menuitem">
            <a href="/jobs/">Jobs</a>
          </li>
          <li role="menuitem">
            <a href="http://blog.nextdoor.com/">Blog</a>
          </li>
          <li role="menuitem">
            <a href="/press/">Press</a>
          </li>
          <li role="menuitem">
            <a href="/help/">Help</a>
          </li>
          <li role="menuitem">
            <a class="btn btn-inverse" href="/login/">Sign in</a>
          </li>
        </ul>
      </div>
    </div>