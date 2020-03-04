<?php
  function getGETParameter($parameter) {
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
  };
  echo getGETParameter('name');