<?php
namespace Front\interfaces;

interface URLInterface {
  const DEV_EBAY_URL  = 'http://ebay.alaname.ie';
  const DEV_CATA_URL  = 'http://catalogue.alaname.ie';
  const DEV_ORDER_URL = 'http://order.alaname.ie';
  const DEV_MAIN_URL  = 'http://www.alaname.ie';
  
  const LIVE_EBAY_URL  = 'https://ebay.alaname.com';
  const LIVE_CATA_URL  = 'https://catalogue.alaname.com';
  const LIVE_ORDER_URL = 'https://order.alaname.com';
  const LIVE_MAIN_URL  = 'https://www.alaname.com';
}