<?php

use App\Warning;
use Illuminate\Database\Seeder;

class WarningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warnings = [
            ['2013-11-24 11:53:00', '2013-11-24 11:53:00', 'Lahti'],
            ['2013-11-27 05:01:00', '2013-11-27 05:01:00', 'Oulu'],
            ['2013-11-28 07:52:00', '2013-11-28 07:52:00', 'Kuopio'],
            ['2013-11-28 05:15:00', '2013-11-28 05:15:00', 'Oulu'],
            ['2013-11-28 03:34:00', '2013-11-28 03:34:00', 'Jyväskylä'],
            ['2013-11-29 07:23:00', '2013-11-29 07:23:00', 'Kuopio'],
            ['2013-12-01 06:49:00', '2013-12-01 06:49:00', 'Helsinki'],
            ['2013-12-04 05:22:00', '2013-12-04 05:22:00', 'Oulu'],
            ['2013-12-04 03:22:00', '2013-12-04 03:22:00', 'Kuopio'],
            ['2013-12-11 14:54:00', '2013-12-11 14:54:00', 'Oulu'],
            ['2013-12-11 10:37:00', '2013-12-11 10:37:00', 'Helsinki'],
            ['2013-12-11 10:30:00', '2013-12-11 10:30:00', 'Järvenpää'],
            ['2013-12-11 06:08:00', '2013-12-11 06:08:00', 'Kuopio'],
            ['2013-12-12 06:40:00', '2013-12-12 06:40:00', 'Kuopio'],
            ['2013-12-12 05:42:00', '2013-12-12 05:42:00', 'Jyväskylä'],
            ['2013-12-12 04:54:00', '2013-12-12 04:54:00', 'Oulu'],
            ['2013-12-13 02:40:00', '2013-12-13 02:40:00', 'Lahti'],
            ['2013-12-16 16:25:00', '2013-12-16 16:25:00', 'Lahti'],
            ['2013-12-17 06:35:00', '2013-12-17 06:35:00', 'Kuopio'],
            ['2013-12-17 05:03:00', '2013-12-17 05:03:00', 'Oulu'],
            ['2013-12-20 16:38:00', '2013-12-20 16:38:00', 'Lahti'],
            ['2013-12-20 10:20:00', '2013-12-20 10:20:00', 'Kuopio'],
            ['2013-12-21 06:43:00', '2013-12-21 06:43:00', 'Kuopio'],
            ['2013-12-21 04:42:00', '2013-12-21 04:42:00', 'Lahti'],
            ['2013-12-21 03:52:00', '2013-12-21 03:52:00', 'Jyväskylä'],
            ['2013-12-22 09:41:00', '2013-12-22 09:41:00', 'Kuopio'],
            ['2013-12-23 06:39:00', '2013-12-23 06:39:00', 'Oulu'],
            ['2013-12-23 05:07:00', '2013-12-23 05:07:00', 'Kuopio'],
            ['2013-12-25 07:31:00', '2013-12-25 07:31:00', 'Kuopio'],
            ['2014-01-10 18:15:00', '2014-01-10 18:15:00', 'Lahti'],
            ['2014-02-05 09:06:00', '2014-02-05 09:06:00', 'Järvenpää'],
            ['2014-02-08 17:51:00', '2014-02-08 17:51:00', 'Kuopio'],
            ['2014-02-08 17:50:00', '2014-02-08 17:50:00', 'Lahti'],
            ['2014-02-08 03:11:00', '2014-02-08 03:11:00', 'Lahti'],
            ['2014-02-08 02:40:00', '2014-02-08 02:40:00', 'Järvenpää'],
            ['2014-02-10 06:46:00', '2014-02-10 06:46:00', 'Järvenpää'],
            ['2014-02-14 08:01:00', '2014-02-14 08:01:00', 'Järvenpää'],
            ['2014-02-17 05:38:00', '2014-02-17 05:38:00', 'Jyväskylä'],
            ['2014-02-23 08:24:00', '2014-02-23 08:24:00', 'Jyväskylä'],
            ['2014-02-23 06:29:00', '2014-02-23 06:29:00', 'Kuopio'],
            ['2014-02-24 06:43:00', '2014-02-24 06:43:00', 'Oulu'],
            ['2014-02-24 05:16:00', '2014-02-24 05:16:00', 'Kuopio'],
            ['2014-03-15 19:16:00', '2014-03-15 19:16:00', 'Lahti'],
            ['2014-03-16 05:34:00', '2014-03-16 05:34:00', 'Helsinki'],
            ['2013-11-20 06:57:00', '2013-11-20 06:57:00', 'Oulu'],
            ['2013-10-23 09:04:00', '2013-10-23 09:04:00', 'Oulu'],
            ['2013-10-19 05:12:00', '2013-10-19 05:12:00', 'Kuopio'],
            ['2013-10-19 18:35:00', '2013-10-19 18:35:00', 'Lahti'],
            ['2013-10-18 03:52:00', '2013-10-18 03:52:00', 'Jyväskylä'],
            ['2013-03-30 17:51:00', '2013-03-30 17:51:00', 'Oulu'],
            ['2013-03-29 20:45:00', '2013-03-29 20:45:00', 'Oulu'],
            ['2013-03-11 02:37:00', '2013-03-11 02:37:00', 'Helsinki'],
            ['2013-03-06 20:16:00', '2013-03-06 20:16:00', 'Helsinki'],
            ['2013-03-04 05:21:00', '2013-03-04 05:21:00', 'Jyväskylä'],
            ['2013-03-03 06:08:00', '2013-03-03 06:08:00', 'Lahti'],
            ['2013-03-01 21:06:00', '2013-03-01 21:06:00', 'Lahti'],
            ['2013-02-27 02:47:00', '2013-02-27 02:47:00', 'Jyväskylä'],
            ['2013-02-27 06:11:00', '2013-02-27 06:11:00', 'Oulu'],
            ['2013-02-01 01:57:00', '2013-02-01 01:57:00', 'Helsinki'],
            ['2013-01-30 16:04:00', '2013-01-30 16:04:00', 'Kuopio'],
            ['2013-01-05 07:00:00', '2013-01-05 07:00:00', 'Helsinki'],
            ['2013-01-04 07:07:00', '2013-01-04 07:07:00', 'Kuopio'],
            ['2013-01-02 03:51:00', '2013-01-02 03:51:00', 'Helsinki'],
            ['2013-01-02 06:39:00', '2013-01-02 06:39:00', 'Kuopio'],
            ['2013-01-01 01:31:00', '2013-01-01 01:31:00', 'Helsinki'],
            ['2013-01-01 15:52:00', '2013-01-01 15:52:00', 'Lahti'],
            ['2013-01-01 17:49:00', '2013-01-01 17:49:00', 'Kuopio'],
            ['2012-12-31 09:23:00', '2012-12-31 09:23:00', 'Kuopio'],
            ['2012-12-31 12:52:00', '2012-12-31 12:52:00', 'Jyväskylä'],
            ['2012-12-30 07:39:00', '2012-12-30 07:39:00', 'Helsinki'],
            ['2014-12-04 07:01:00', '2014-12-04 07:01:00', 'Oulu'],
            ['2012-12-29 04:20:00', '2012-12-29 04:20:00', 'Helsinki'],
            ['2012-12-27 14:19:00', '2012-12-27 14:19:00', 'Kuopio'],
            ['2012-12-27 21:31:00', '2012-12-27 21:31:00', 'Helsinki'],
            ['2012-11-29 12:40:00', '2012-11-29 12:40:00', 'Helsinki'],
            ['2012-11-19 10:04:00', '2012-11-19 10:04:00', 'Oulu'],
            ['2012-11-16 11:35:00', '2012-11-16 11:35:00', 'Oulu'],
            ['2012-11-14 13:00:00', '2012-11-14 13:00:00', 'Oulu'],
            ['2012-11-08 09:24:00', '2012-11-08 09:24:00', 'Kuopio'],
            ['2012-11-07 03:37:00', '2012-11-07 03:37:00', 'Lahti'],
            ['2012-11-07 04:13:00', '2012-11-07 04:13:00', 'Kuopio'],
            ['2014-11-23 12:12:00', '2014-11-23 12:12:00', 'Lahti'],
            ['2012-10-31 04:42:00', '2012-10-31 04:42:00', 'Oulu'],
            ['2012-10-30 16:20:00', '2012-10-30 16:20:00', 'Jyväskylä'],
            ['2012-10-27 09:40:00', '2012-10-27 09:40:00', 'Lahti'],
            ['2012-10-26 06:53:00', '2012-10-26 06:53:00', 'Helsinki'],
            ['2014-11-22 07:31:00', '2014-11-22 07:31:00', 'Oulu'],
            ['2012-10-25 07:25:00', '2012-10-25 07:25:00', 'Jyväskylä'],
            ['2012-10-22 04:52:00', '2012-10-22 04:52:00', 'Oulu'],
            ['2012-10-20 06:30:00', '2012-10-20 06:30:00', 'Oulu'],
            ['2012-04-19 03:45:00', '2012-04-19 03:45:00', 'Jyväskylä'],
            ['2012-04-06 06:53:00', '2012-04-06 06:53:00', 'Kuopio'],
            ['2012-04-03 00:29:00', '2012-04-03 00:29:00', 'Lahti'],
            ['2012-03-23 05:04:00', '2012-03-23 05:04:00', 'Jyväskylä'],
            ['2012-03-22 06:48:00', '2012-03-22 06:48:00', 'Jyväskylä'],
            ['2012-03-17 05:01:00', '2012-03-17 05:01:00', 'Oulu'],
            ['2012-03-13 11:15:00', '2012-03-13 11:15:00', 'Helsinki'],
            ['2012-03-11 21:12:00', '2012-03-11 21:12:00', 'Helsinki'],
            ['2012-03-06 06:22:00', '2012-03-06 06:22:00', 'Helsinki'],
            ['2012-03-04 03:27:00', '2012-03-04 03:27:00', 'Jyväskylä'],
            ['2012-03-03 03:44:00', '2012-03-03 03:44:00', 'Jyväskylä'],
            ['2012-03-03 04:04:00', '2012-03-03 04:04:00', 'Helsinki'],
            ['2012-03-03 19:40:00', '2012-03-03 19:40:00', 'Helsinki'],
            ['2012-03-02 02:43:00', '2012-03-02 02:43:00', 'Jyväskylä'],
            ['2012-03-02 03:57:00', '2012-03-02 03:57:00', 'Oulu'],
            ['2012-03-02 05:05:00', '2012-03-02 05:05:00', 'Lahti'],
            ['2012-03-02 06:15:00', '2012-03-02 06:15:00', 'Helsinki'],
            ['2012-02-24 06:33:00', '2012-02-24 06:33:00', 'Kuopio'],
            ['2012-02-23 05:43:00', '2012-02-23 05:43:00', 'Helsinki'],
            ['2012-02-23 09:41:00', '2012-02-23 09:41:00', 'Kuopio'],
            ['2014-11-21 16:35:00', '2014-11-21 16:35:00', 'Helsinki'],
            ['2012-02-22 05:46:00', '2012-02-22 05:46:00', 'Helsinki'],
            ['2012-02-02 06:17:00', '2012-02-02 06:17:00', 'Lahti'],
            ['2012-02-21 04:57:00', '2012-02-21 04:57:00', 'Helsinki'],
            ['2012-01-17 18:45:00', '2012-01-17 18:45:00', 'Kuopio'],
            ['2012-01-13 00:41:00', '2012-01-13 00:41:00', 'Lahti'],
            ['2014-11-18 06:29:00', '2014-11-18 06:29:00', 'Oulu'],
            ['2012-01-13 07:20:00', '2012-01-13 07:20:00', 'Helsinki'],
            ['2012-01-12 00:00:00', '2012-01-12 00:00:00', 'Helsinki'],
            ['2012-01-09 08:17:00', '2012-01-09 08:17:00', 'Helsinki'],
            ['2012-01-08 05:52:00', '2012-01-08 05:52:00', 'Helsinki'],
            ['2012-01-07 06:28:00', '2012-01-07 06:28:00', 'Helsinki'],
            ['2012-01-06 03:11:00', '2012-01-06 03:11:00', 'Helsinki'],
            ['2012-01-05 03:44:00', '2012-01-05 03:44:00', 'Lahti'],
            ['2012-01-05 04:37:00', '2012-01-05 04:37:00', 'Helsinki'],
            ['2012-01-05 06:43:00', '2012-01-05 06:43:00', 'Kuopio'],
            ['2012-01-04 03:01:00', '2012-01-04 03:01:00', 'Helsinki'],
            ['2012-01-03 00:21:00', '2012-01-03 00:21:00', 'Helsinki'],
            ['2011-12-31 05:24:00', '2011-12-31 05:24:00', 'Helsinki'],
            ['2011-12-31 05:56:00', '2011-12-31 05:56:00', 'Lahti'],
            ['2011-12-25 05:22:00', '2011-12-25 05:22:00', 'Lahti'],
            ['2011-12-25 05:32:00', '2011-12-25 05:32:00', 'Jyväskylä'],
            ['2011-12-25 05:51:00', '2011-12-25 05:51:00', 'Helsinki'],
            ['2011-12-25 19:06:00', '2011-12-25 19:06:00', 'Lahti'],
            ['2011-12-23 03:46:00', '2011-12-23 03:46:00', 'Helsinki'],
            ['2011-12-22 01:55:00', '2011-12-22 01:55:00', 'Helsinki'],
            ['2011-12-21 04:20:00', '2011-12-21 04:20:00', 'Lahti'],
            ['2014-11-02 06:45:00', '2014-11-02 06:45:00', 'Kuopio'],
            ['2011-12-21 16:38:00', '2011-12-21 16:38:00', 'Helsinki'],
            ['2011-12-19 06:23:00', '2011-12-19 06:23:00', 'Kuopio'],
            ['2011-12-16 06:29:00', '2011-12-16 06:29:00', 'Jyväskylä'],
            ['2011-12-15 03:19:00', '2011-12-15 03:19:00', 'Jyväskylä'],
            ['2011-12-15 06:24:00', '2011-12-15 06:24:00', 'Oulu'],
            ['2011-12-15 07:26:00', '2011-12-15 07:26:00', 'Kuopio'],
            ['2011-12-15 09:14:00', '2011-12-15 09:14:00', 'Lahti'],
            ['2011-12-14 08:00:00', '2011-12-14 08:00:00', 'Jyväskylä'],
            ['2011-12-13 05:12:00', '2011-12-13 05:12:00', 'Lahti'],
            ['2011-12-12 03:17:00', '2011-12-12 03:17:00', 'Helsinki'],
            ['2011-12-07 00:37:00', '2011-12-07 00:37:00', 'Helsinki'],
            ['2011-12-05 05:24:00', '2011-12-05 05:24:00', 'Lahti'],
            ['2011-12-05 07:49:00', '2011-12-05 07:49:00', 'Kuopio'],
            ['2011-12-05 10:36:00', '2011-12-05 10:36:00', 'Jyväskylä'],
            ['2011-12-01 04:30:00', '2011-12-01 04:30:00', 'Lahti'],
            ['2014-11-01 08:22:00', '2014-11-01 08:22:00', 'Helsinki'],
            ['2011-11-30 07:05:00', '2011-11-30 07:05:00', 'Oulu'],
            ['2011-11-29 09:36:00', '2011-11-29 09:36:00', 'Lahti'],
            ['2011-11-28 16:44:00', '2011-11-28 16:44:00', 'Jyväskylä'],
            ['2011-11-22 15:44:00', '2011-11-22 15:44:00', 'Kuopio'],
            ['2014-10-25 09:57:00', '2014-10-25 09:57:00', 'Kuopio'],
            ['2011-11-19 08:03:00', '2011-11-19 08:03:00', 'Oulu'],
            ['2011-11-18 07:55:00', '2011-11-18 07:55:00', 'Kuopio'],
            ['2014-10-21 03:43:00', '2014-10-21 03:43:00', 'Kuopio'],
            ['2014-10-21 03:43:00', '2014-10-21 03:43:00', 'Kuopio'],
            ['2014-10-20 06:49:00', '2014-10-20 06:49:00', 'Oulu'],
            ['2014-10-21 07:47:00', '2014-10-21 07:47:00', 'Jyväskylä'],
            ['2014-12-04 07:06:00', '2014-12-04 07:06:00', 'Kuopio'],
            ['2014-12-04 07:32:00', '2014-12-04 07:32:00', 'Lahti'],
            ['2014-12-05 06:30:00', '2014-12-05 06:30:00', 'Helsinki'],
            ['2014-12-05 06:17:00', '2014-12-05 06:17:00', 'Lahti'],
            ['2014-12-05 06:48:00', '2014-12-05 06:48:00', 'Oulu'],
            ['2014-11-22 07:31:00', '2014-11-22 07:31:00', 'Oulu'],
            ['2014-12-08 04:39:00', '2014-12-08 04:39:00', 'Kuopio'],
            ['2014-12-13 06:09:00', '2014-12-13 06:09:00', 'Helsinki'],
            ['2014-12-14 08:05:00', '2014-12-14 08:05:00', 'Lahti'],
            ['2014-12-14 08:16:00', '2014-12-14 08:16:00', 'Kuopio'],
            ['2014-12-16 10:13:00', '2014-12-16 10:13:00', 'Helsinki'],
            ['2014-12-16 12:11:00', '2014-12-16 12:11:00', 'Järvenpää'],
            ['2014-12-17 06:51:00', '2014-12-17 06:51:00', 'Jyväskylä'],
            ['2014-12-19 07:12:00', '2014-12-19 07:12:00', 'Järvenpää'],
            ['2014-12-31 05:38:00', '2014-12-31 05:38:00', 'Lahti'],
            ['2014-12-31 06:40:00', '2014-12-31 06:40:00', 'Helsinki'],
            ['2014-12-31 06:40:00', '2014-12-31 06:40:00', 'Oulu'],
            ['2014-12-31 06:49:00', '2014-12-31 06:49:00', 'Jyväskylä'],
            ['2014-12-31 06:53:00', '2014-12-31 06:53:00', 'Lahti'],
            ['2014-12-31 06:55:00', '2014-12-31 06:55:00', 'Järvenpää'],
            ['2014-12-31 14:35:00', '2014-12-31 14:35:00', 'Kuopio'],
            ['2015-01-02 07:26:00', '2015-01-02 07:26:00', 'Jyväskylä'],
            ['2015-01-03 06:57:00', '2015-01-03 06:57:00', 'Kuopio'],
            ['2015-01-08 11:38:00', '2015-01-08 11:38:00', 'Helsinki'],
            ['2015-01-09 08:08:00', '2015-01-09 08:08:00', 'Järvenpää'],
            ['2015-01-10 23:45:00', '2015-01-10 23:45:00', 'Jyväskylä'],
            ['2015-01-15 09:29:00', '2015-01-15 09:29:00', 'Helsinki'],
            ['2015-01-15 19:43:00', '2015-01-15 19:43:00', 'Kuopio'],
            ['2015-01-17 02:26:00', '2015-01-17 02:26:00', 'Jyväskylä'],
            ['2015-01-17 06:00:00', '2015-01-17 06:00:00', 'Helsinki'],
            ['2015-01-29 07:45:00', '2015-01-29 07:45:00', 'Kuopio'],
            ['2015-01-17 05:56:00', '2015-01-17 05:56:00', 'Lahti'],
            ['2015-01-19 08:34:00', '2015-01-19 08:34:00', 'Järvenpää'],
            ['2015-02-08 04:15:00', '2015-02-08 04:15:00', 'Lahti'],
            ['2015-02-11 07:25:00', '2015-02-11 07:25:00', 'Jyväskylä'],
            ['2015-02-11 08:25:00', '2015-02-11 08:25:00', 'Oulu'],
            ['2015-02-11 09:25:00', '2015-02-11 09:25:00', 'Kuopio'],
            ['2015-02-11 10:15:00', '2015-02-11 10:15:00', 'Helsinki'],
            ['2015-02-13 04:55:00', '2015-02-13 04:55:00', 'Oulu'],
            ['2015-02-13 06:45:00', '2015-02-13 06:45:00', 'Järvenpää'],
            ['2015-02-19 07:25:00', '2015-02-19 07:25:00', 'Järvenpää'],
            ['2015-02-19 20:25:00', '2015-02-19 20:25:00', 'Lahti'],
            ['2015-02-20 01:35:00', '2015-02-20 01:35:00', 'Jyväskylä'],
            ['2015-02-20 05:45:00', '2015-02-20 05:45:00', 'Oulu'],
            ['2015-02-20 07:55:00', '2015-02-20 07:55:00', 'Järvenpää'],
            ['2015-02-20 08:45:00', '2015-02-20 08:45:00', 'Kuopio'],
            ['2015-03-08 09:15:00', '2015-03-08 09:15:00', 'Oulu'],
            ['2015-03-15 17:35:00', '2015-03-15 17:35:00', 'Helsinki'],
            ['2015-08-16 11:04:00', '2015-08-16 11:04:00', 'Helsinki'],
            ['2015-10-12 08:15:00', '2015-10-12 08:15:00', 'Oulu'],
            ['2015-10-30 02:35:00', '2015-10-30 02:35:00', 'Kuopio'],
            ['2015-10-30 02:45:00', '2015-10-30 02:45:00', 'Jyväskylä'],
            ['2015-11-05 19:05:00', '2015-11-05 19:05:00', 'Oulu'],
            ['2015-11-12 03:15:00', '2015-11-12 03:15:00', 'Lahti'],
            ['2015-11-13 03:45:00', '2015-11-13 03:45:00', 'Oulu'],
            ['2015-11-23 05:55:00', '2015-11-23 05:55:00', 'Kuopio'],
            ['2015-11-23 06:10:00', '2015-11-23 06:10:00', 'Helsinki'],
            ['2015-11-23 06:11:00', '2015-11-23 06:11:00', 'Lahti'],
            ['2015-11-24 07:11:00', '2015-11-24 07:11:00', 'Kuopio'],
            ['2015-11-25 07:31:00', '2015-11-25 07:31:00', 'Kuopio'],
            ['2015-11-27 06:40:00', '2015-11-27 06:40:00', 'Kuopio'],
            ['2015-12-03 04:43:00', '2015-12-03 04:43:00', 'Lahti'],
            ['2015-12-05 08:28:00', '2015-12-05 08:28:00', 'Kuopio'],
            ['2015-12-06 08:37:00', '2015-12-06 08:37:00', 'Kuopio'],
            ['2015-12-07 07:01:00', '2015-12-07 07:01:00', 'Kuopio'],
            ['2015-12-06 06:03:00', '2015-12-06 06:03:00', 'Oulu'],
            ['2015-12-08 06:39:00', '2015-12-08 06:39:00', 'Kuopio'],
            ['2015-12-09 19:07:00', '2015-12-09 19:07:00', 'Oulu'],
            ['2015-12-11 14:07:00', '2015-12-11 14:07:00', 'Oulu'],
            ['2015-12-14 15:27:00', '2015-12-14 15:27:00', 'Helsinki'],
            ['2015-12-16 10:31:00', '2015-12-16 10:31:00', 'Jyväskylä'],
            ['2015-12-10 03:37:00', '2015-12-10 03:37:00', 'Lahti'],
            ['2015-12-14 08:03:00', '2015-12-14 08:03:00', 'Lahti'],
            ['2015-12-18 19:25:00', '2015-12-18 19:25:00', 'Kuopio'],
            ['2015-12-21 03:53:00', '2015-12-21 03:53:00', 'Oulu'],
            ['2016-01-26 09:45:00', '2016-01-26 09:45:00', 'Helsinki'],
            ['2016-01-26 00:35:00', '2016-01-26 00:35:00', 'Lahti'],
            ['2016-01-26 00:35:00', '2016-01-26 00:35:00', 'Helsinki'],
            ['2015-12-27 19:58:00', '2015-12-27 19:58:00', 'Kuopio'],
            ['2015-12-27 19:58:00', '2015-12-27 19:58:00', 'Oulu'],
            ['2015-12-25 15:30:00', '2015-12-25 15:30:00', 'Kuopio'],
            ['2016-01-26 16:45:00', '2016-01-26 16:45:00', 'Järvenpää'],
            ['2016-01-27 02:05:00', '2016-01-27 02:05:00', 'Helsinki'],
            ['2016-01-27 02:05:00', '2016-01-27 02:05:00', 'Lahti'],
            ['2016-01-27 05:35:00', '2016-01-27 05:35:00', 'Jyväskylä'],
            ['2016-01-27 07:25:00', '2016-01-27 07:25:00', 'Järvenpää'],
            ['2016-01-28 04:25:00', '2016-01-28 04:25:00', 'Jyväskylä'],
            ['2016-01-28 06:35:00', '2016-01-28 06:35:00', 'Järvenpää'],
            ['2016-01-30 04:15:00', '2016-01-30 04:15:00', 'Lahti'],
            ['2016-01-30 04:15:00', '2016-01-30 04:15:00', 'Helsinki'],
            ['2016-01-30 07:55:00', '2016-01-30 07:55:00', 'Lahti'],
            ['2016-01-30 07:55:00', '2016-01-30 07:55:00', 'Helsinki'],
            ['2016-01-30 10:05:00', '2016-01-30 10:05:00', 'Jyväskylä'],
            ['2016-01-30 21:35:00', '2016-01-30 21:35:00', 'Lahti'],
            ['2016-01-31 06:55:00', '2016-01-31 06:55:00', 'Kuopio'],
            ['2016-02-02 04:05:00', '2016-02-02 04:05:00', 'Lahti'],
            ['2016-02-02 04:05:00', '2016-02-02 04:05:00', 'Helsinki'],
            ['2016-02-07 06:55:00', '2016-02-07 06:55:00', 'Helsinki'],
            ['2016-02-07 06:55:00', '2016-02-07 06:55:00', 'Lahti'],
            ['2016-02-07 08:35:00', '2016-02-07 08:35:00', 'Kuopio'],
            ['2016-02-07 11:25:00', '2016-02-07 11:25:00', 'Jyväskylä'],
            ['2016-02-08 05:25:00', '2016-02-08 05:25:00', 'Kuopio'],
            ['2016-02-08 05:45:00', '2016-02-08 05:45:00', 'Jyväskylä'],
            ['2016-02-08 05:45:00', '2016-02-08 05:45:00', 'Lahti'],
            ['2016-02-08 05:45:00', '2016-02-08 05:45:00', 'Helsinki'],
            ['2016-02-08 05:45:00', '2016-02-08 05:45:00', 'Jyväskylä'],
            ['2016-02-08 07:05:00', '2016-02-08 07:05:00', 'Järvenpää'],
            ['2016-02-08 07:15:00', '2016-02-08 07:15:00', 'Oulu'],
            ['2016-02-10 01:55:00', '2016-02-10 01:55:00', 'Lahti'],
            ['2016-02-10 01:55:00', '2016-02-10 01:55:00', 'Helsinki'],
            ['2016-02-10 07:05:00', '2016-02-10 07:05:00', 'Kuopio'],
            ['2016-02-11 05:05:00', '2016-02-11 05:05:00', 'Oulu'],
            ['2016-02-11 05:45:00', '2016-02-11 05:45:00', 'Kuopio'],
            ['2016-02-19 04:25:00', '2016-02-19 04:25:00', 'Helsinki'],
            ['2016-02-23 05:15:00', '2016-02-23 05:15:00', 'Helsinki'],
            ['2016-02-27 08:05:00', '2016-02-27 08:05:00', 'Kuopio'],
            ['2016-03-08 05:55:00', '2016-03-08 05:55:00', 'Jyväskylä'],
            ['2016-03-10 06:35:00', '2016-03-10 06:35:00', 'Jyväskylä'],
            ['2016-03-11 05:45:00', '2016-03-11 05:45:00', 'Lahti'],
            ['2016-03-14 05:15:00', '2016-03-14 05:15:00', 'Kuopio'],
            ['2016-03-16 07:55:00', '2016-03-16 07:55:00', 'Jyväskylä'],
            ['2016-03-16 07:55:00', '2016-03-16 07:55:00', 'Jyväskylä'],
            ['2016-03-29 06:35:00', '2016-03-29 06:35:00', 'Oulu'],
            ['2016-10-26 15:15:00', '2016-10-26 15:15:00', 'Jyväskylä'],
            ['2016-10-27 05:45:00', '2016-10-27 05:45:00', 'Oulu'],
            ['2016-11-01 00:25:00', '2016-11-01 00:25:00', 'Lahti'],
            ['2016-11-01 00:35:00', '2016-11-01 00:35:00', 'Helsinki'],
            ['2016-11-02 00:15:00', '2016-11-02 00:15:00', 'Helsinki'],
            ['2016-11-03 07:55:00', '2016-11-03 07:55:00', 'Lahti'],
            ['2016-11-15 21:45:00', '2016-11-15 21:45:00', 'Kuopio'],
            ['2016-11-30 07:45:00', '2016-11-30 07:45:00', 'Helsinki'],
            ['2016-11-30 17:45:00', '2016-11-30 17:45:00', 'Helsinki'],
            ['2016-12-05 07:15:00', '2016-12-05 07:15:00', 'Jyväskylä'],
            ['2016-12-05 07:25:00', '2016-12-05 07:25:00', 'Helsinki'],
            ['2016-12-05 07:25:00', '2016-12-05 07:25:00', 'Lahti'],
            ['2016-12-05 10:25:00', '2016-12-05 10:25:00', 'Kuopio'],
            ['2016-12-08 03:25:00', '2016-12-08 03:25:00', 'Helsinki'],
            ['2016-12-08 03:35:00', '2016-12-08 03:35:00', 'Lahti'],
            ['2016-12-15 06:25:00', '2016-12-15 06:25:00', 'Kuopio'],
            ['2016-12-19 13:35:00', '2016-12-19 13:35:00', 'Lahti'],
            ['2016-12-20 06:55:00', '2016-12-20 06:55:00', 'Oulu'],
            ['2016-12-24 04:15:00', '2016-12-24 04:15:00', 'Kuopio'],
            ['2016-12-25 05:05:00', '2016-12-25 05:05:00', 'Kuopio'],
            ['2016-12-25 06:35:00', '2016-12-25 06:35:00', 'Helsinki'],
            ['2016-12-25 07:15:00', '2016-12-25 07:15:00', 'Lahti'],
            ['2016-12-27 11:25:00', '2016-12-27 11:25:00', 'Jyväskylä'],
            ['2016-12-30 12:45:00', '2016-12-30 12:45:00', 'Oulu'],
            ['2016-12-31 13:15:00', '2016-12-31 13:15:00', 'Jyväskylä'],
            ['2017-01-10 12:25:00', '2017-01-10 12:25:00', 'Jyväskylä'],
            ['2017-01-12 07:15:00', '2017-01-12 07:15:00', 'Oulu'],
            ['2017-01-18 21:35:00', '2017-01-18 21:35:00', 'Helsinki'],
            ['2017-01-19 06:15:00', '2017-01-19 06:15:00', 'Oulu'],
            ['2017-01-20 03:35:00', '2017-01-20 03:35:00', 'Kuopio'],
            ['2017-01-20 03:45:00', '2017-01-20 03:45:00', 'Helsinki'],
            ['2017-01-20 03:45:00', '2017-01-20 03:45:00', 'Jyväskylä'],
            ['2017-01-20 06:15:00', '2017-01-20 06:15:00', 'Oulu'],
            ['2016-12-31 06:10:00', '2016-12-31 06:10:00', 'Oulu'],
            ['2017-01-23 12:35:00', '2017-01-23 12:35:00', 'Jyväskylä'],
            ['2017-01-26 03:15:00', '2017-01-26 03:15:00', 'Lahti'],
            ['2017-01-26 04:55:00', '2017-01-26 04:55:00', 'Kuopio'],
            ['2017-01-26 08:15:00', '2017-01-26 08:15:00', 'Helsinki'],
            ['2017-01-26 14:35:00', '2017-01-26 14:35:00', 'Jyväskylä'],
            ['2017-01-27 06:25:00', '2017-01-27 06:25:00', 'Helsinki'],
            ['2017-01-30 03:45:00', '2017-01-30 03:45:00', 'Helsinki'],
            ['2017-01-31 06:55:00', '2017-01-31 06:55:00', 'Jyväskylä'],
            ['2017-02-02 06:55:00', '2017-02-02 06:55:00', 'Lahti'],
            ['2017-02-02 07:05:00', '2017-02-02 07:05:00', 'Helsinki'],
            ['2017-02-14 07:05:00', '2017-02-14 07:05:00', 'Oulu'],
            ['2017-02-14 21:45:00', '2017-02-14 21:45:00', 'Jyväskylä'],
            ['2017-02-17 03:09:00', '2017-02-17 03:09:00', 'Helsinki'],
            ['2017-02-19 21:25:00', '2017-02-19 21:25:00', 'Jyväskylä'],
            ['2017-02-21 06:35:00', '2017-02-21 06:35:00', 'Lahti'],
            ['2017-02-21 06:45:00', '2017-02-21 06:45:00', 'Helsinki'],
            ['2017-02-26 12:15:00', '2017-02-26 12:15:00', 'Helsinki'],
            ['2017-02-26 12:25:00', '2017-02-26 12:25:00', 'Lahti'],
            ['2017-02-28 04:25:00', '2017-02-28 04:25:00', 'Helsinki'],
            ['2017-02-28 04:35:00', '2017-02-28 04:35:00', 'Lahti'],
            ['2017-02-28 09:05:00', '2017-02-28 09:05:00', 'Jyväskylä'],
            ['2017-02-28 20:55:00', '2017-02-28 20:55:00', 'Lahti'],
            ['2017-03-01 06:55:00', '2017-03-01 06:55:00', 'Jyväskylä'],
            ['2017-03-01 21:35:00', '2017-03-01 21:35:00', 'Helsinki'],
            ['2017-03-03 03:50:00', '2017-03-03 03:50:00', 'Lahti'],
            ['2017-03-03 03:50:00', '2017-03-03 03:50:00', 'Helsinki'],
            ['2017-03-03 05:05:00', '2017-03-03 05:05:00', 'Jyväskylä'],
            ['2017-03-04 06:35:00', '2017-03-04 06:35:00', 'Lahti'],
            ['2017-03-04 06:35:00', '2017-03-04 06:35:00', 'Helsinki'],
            ['2017-03-08 02:55:00', '2017-03-08 02:55:00', 'Helsinki'],
            ['2017-03-08 04:25:00', '2017-03-08 04:25:00', 'Lahti'],
            ['2017-03-10 06:55:00', '2017-03-10 06:55:00', 'Helsinki'],
            ['2017-03-11 05:25:00', '2017-03-11 05:25:00', 'Jyväskylä'],
            ['2017-03-11 05:35:00', '2017-03-11 05:35:00', 'Lahti'],
            ['2017-03-16 07:55:00', '2017-03-16 07:55:00', 'Kuopio'],
            ['2017-03-19 06:05:00', '2017-03-19 06:05:00', 'Kuopio'],
            ['2017-03-21 06:15:00', '2017-03-21 06:15:00', 'Kuopio'],
            ['2017-03-23 04:45:00', '2017-03-23 04:45:00', 'Kuopio'],
            ['2017-03-25 07:05:00', '2017-03-25 07:05:00', 'Kuopio'],
            ['2017-04-08 02:11:00', '2017-04-08 02:11:00', 'Lahti'],
            ['2017-04-08 02:12:00', '2017-04-08 02:12:00', 'Helsinki'],
            ['2017-04-12 09:15:00', '2017-04-12 09:15:00', 'Oulu'],
            ['2017-04-12 09:15:00', '2017-04-12 09:15:00', 'Helsinki'],
            ['2017-04-12 09:15:00', '2017-04-12 09:15:00', 'Lahti'],
            ['2017-04-12 09:15:00', '2017-04-12 09:15:00', 'Helsinki'],
            ['2017-04-12 09:15:00', '2017-04-12 09:15:00', 'Jyväskylä'],
            ['2017-04-23 22:05:00', '2017-04-23 22:05:00', 'Kuopio'],
            ['2017-10-01 00:05:00', '2017-10-01 00:05:00', 'Helsinki'],
            ['2017-10-01 00:05:00', '2017-10-01 00:05:00', 'Helsinki'],
            ['2017-10-01 00:05:00', '2017-10-01 00:05:00', 'Helsinki'],
            ['2017-10-01 00:05:00', '2017-10-01 00:05:00', 'Helsinki'],
            ['2017-10-01 00:05:00', '2017-10-01 00:05:00', 'Helsinki'],
            ['2017-10-01 00:05:00', '2017-10-01 00:05:00', 'Helsinki'],
            ['2017-10-01 00:05:00', '2017-10-01 00:05:00', 'Helsinki'],
        ];

        foreach ($warnings as $data) {
            $warning = new Warning();

            $warning->created_at = $data[0];
            $warning->updated_at = $data[1];
            $warning->city = $data[2];

            $warning->save();
        }
    }
}
