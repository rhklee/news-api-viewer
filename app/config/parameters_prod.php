<?php
   $container->setParameter('database_driver', null);
   $container->setParameter('database_host', null;
   $container->setParameter('database_port', null);
   $container->setParameter('database_name', null);
   $container->setParameter('database_user', null);
   $container->setParameter('database_password', null);
   $container->setParameter('secret', getenv('SECRET'));
   $container->setParameter('locale', 'en');
   $container->setParameter('mailer_transport', null);
   $container->setParameter('mailer_host', null);
   $container->setParameter('mailer_user', null);
   $container->setParameter('mailer_password', null);
   $container->setParameter('news_api_key', getenv('NEWS_API_KEY'));