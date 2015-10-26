<?php
use dao\blog\UserDao;
use dao\blog\TagDao;
use dao\blog\CommentDao;
use dao\blog\CategoryDao;
use dao\blog\ArticleTagMapDao;
use dao\blog\ArticleDao;
use dao\blog\LinksDao;

$di->setShared ( 'dao\\blog\\UserDao', function () use($di) {
    return new UserDao ( $di );
} );

$di->setShared ( 'dao\\blog\\TagDao', function () use($di) {
    return new TagDao ( $di );
} );

$di->setShared ( 'dao\\blog\\CommentDao', function () use($di) {
    return new CommentDao ( $di );
} );

$di->setShared ( 'dao\\blog\\CategoryDao', function () use($di) {
    return new CategoryDao ( $di );
} );

$di->setShared ( 'dao\\blog\\ArticleTagMapDao', function () use($di) {
    return new ArticleTagMapDao ( $di );
} );

$di->setShared ( 'dao\\blog\\ArticleDao', function () use($di) {
    return new ArticleDao ( $di );
} );

$di->setShared ( 'dao\\blog\\LinksDao', function () use($di) {
    return new LinksDao ( $di );
} );