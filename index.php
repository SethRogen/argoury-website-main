<!doctype html>
<html>
 <head>
  <link href="css/global-2.css" rel="stylesheet"> 
  <link href="css/oldmenu-5.css" rel="stylesheet"> 
  <title>RuneScape - MMORPG - The No.1 Free Online Multiplayer Game</title> 
  <meta name="keywords" content="MMORPG, free RPG games online, online multiplayer, role-playing, massively multiplayer games, mmo, RuneScape, Jagex, java"> 
  <meta name="description" content="Play RuneScape for free, and join a global community of millions as you complete quests and win enormous treasures in a 3D world full of magic and monsters."> 
  <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico"> 
  <link rel="SHORTCUT ICON" href="favicon.ico"> 
  <link rel="apple-touch-icon" href="img/mobile.png"> 
  <link href="css/title-5.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="css/shadowbox-0.css"> 
  <style>
  #sb-wrapper-inner {
   -moz-box-shadow: 0 0 50px black;
   -webkit-box-shadow: 0 0 50px black;
   box-shadow: 0 0 50px black;
  }
  #sb-title-inner {
   position: relative;
   z-index: 1;
  }
  #sb-caption {
   position: relative;
   z-index: 1;
   text-align: center;
  }
  #sb-caption a {
   font-weight: bold;
   font-size: 14px;
   color: #918c0b;
   text-decoration: none;
  }
  #sb-caption a:hover {
   text-decoration: underline;
  }
 </style> 
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
 </head>
 <body class="BgBody">
  <div class="BgContent"> 
   <div class="BgHead"> 
    <div class="BgFoot"> 
     <div class="BgWidth"> <a name="top"></a> 
      <header>
       <div id="header"> 
       <a id="playnow" class="HoverImg" href="game.php"><img src="img/main/homepage/play.jpg" alt="Play Now"></a> <span id="playerCount">.config people currently online</span> 
        <form id="headerSearch" action="kbase/search.php" method="post"> 
         <input type="hidden" name="keywords_chk" value="1"> 
         <input type="hidden" name="body_chk" value="1"> 
         <input type="hidden" name="title_chk" value="1"> 
         <input type="hidden" name="description_chk" value="1"> 
         <input type="text" name="search_query" placeholder="Search..."> 
         <div class="HoverImg">
          <button type="submit" name="kbsearch_button"><img src="img/main/homepage/headerSearchButton.jpg" alt="Search"></button>
         </div> 
        </form> 
       </div>
      </header> 
      <nav>
       <div id="menubox"> 
        <ul id="menus"> 
         <li class="top"><a href="index.php" id="home" class="tl"><span class="ts">Home</span></a></li> 
         <li class="top"><a id="play" class="tl" href="game.php" onclick="try{pageTracker._trackPageview('/play_game/menu/top')}catch(x){}; try{_pageTracker._trackPageview('/play_game/menu/top')}catch(x){}"><span class="ts">Play Now</span><!--[if gt IE 6]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--> <iframe id="playI" src="blank.ws"></iframe> 
          <ul> 
           <li><a href="game-autocreate-true.php" id="menuPlay1" class="fly"><span>New Users</span></a></li> 
           <li><a href="game.php" id="playExisting" onclick="try{pageTracker._trackPageview('/play_game/menu/existing')}catch(x){}; try{_pageTracker._trackPageview('/play_game/menu/existing')}catch(x){}" class="fly"><span>Existing Users</span></a></li> 
           <li><a href="options.php" class="fly"><span>Java Options</span></a></li> 
          </ul> <!--[if lte IE 6]></td></tr></table></a><![endif]--> </li> 
         <li class="top"><a id="account" class="tl" href="account_management.php"><span class="ts">Account</span><!--[if gt IE 6]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--> <iframe id="accountI" src="blank.ws"></iframe> 
          <ul> 
           <li><a href="members.php" class="fly"><span>Upgrade Your Account</span></a></li> 
           <li><a href="secure/create/index.php?j=1" id="menuPlay2" class="fly"><span>Create New Account</span></a></li> 
           <li><a href="account_management.php" class="fly"><span>Account Management</span></a></li> 
          </ul> <!--[if lte IE 6]></td></tr></table></a><![endif]--> </li> 
         <li class="top"><a id="guide" class="tl" href="kbase/guid/manual.php"><span class="ts">Game Guide</span><!--[if gt IE 6]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--> <iframe id="guideI" src="blank.ws"></iframe> 
          <ul> 
           <li><a href="kbase/guid/manual.php" class="fly"><span>Manual</span></a></li> 
           <li><a href="services/m=questhelp/index.php" class="fly"><span>QuestHelp</span></a></li> 
           <li><a href="services/m=itemdb_rs/frontpage.php" class="fly"><span>Grand Exchange</span></a></li> 
           <li><a href="kbase/guid/rules_of_conduct.php" class="fly"><span>Rules</span></a></li> 
           <li><a href="kbase/guid/lore.php" class="fly"><span>Lores</span></a></li> 
           <li><a href="splash.php" class="fly"><span>What is RuneScape?</span></a></li> 
          </ul> <!--[if lte IE 6]></td></tr></table></a><![endif]--> </li> 
         <li class="top"><a id="community" class="tl" href="services/m=forum/forums.php"><span class="ts">Community</span><!--[if gt IE 6]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--> <iframe id="communityI" src="blank.ws"></iframe> 
          <ul> 
           <li><a href="services/m=forum/forums.php" class="fly"><span>Forums</span></a></li> 
           <li><a href="services/m=hiscore/hiscores.php" class="fly"><span>Hiscores</span></a></li> 
           <li><a href="kbase/guid/Player_Submissions.php" class="fly"><span>Player Submissions</span></a></li> 
           <li><a href="services/m=adventurers-log/display_player_profile.php" class="fly"><span>Adventurer's Log</span></a></li> 
           <li><a href="kbase/guid/Downloads_and_Wallpapers.php" class="fly"><span>Downloads &amp; Wallpapers</span></a></li> 
          </ul> <!--[if lte IE 6]></td></tr></table></a><![endif]--> </li> 
         <li class="top"><a id="help" class="tl" href="kbase/guid/Customer_Support.php"><span class="ts">Help</span><!--[if gt IE 6]><!--></a><!--<![endif]--> <!--[if lte IE 6]><table><tr><td><![endif]--> <iframe id="helpI" src="blank.ws"></iframe> 
          <ul> 
           <li><a href="kbase/guid/Customer_Support.php" class="fly"><span>Customer Support</span></a></li> 
           <li><a href="redirect.php%3Fmod=www&amp;dest=loginapplet/loginapplet-mod-accountappeal-amp;dest-passwordchoice.php.php" class="fly"><span>Password Recovery</span></a></li> 
           <li><a href="redirect.php%3Fmod=www&amp;dest=loginapplet/loginapplet-mod-accountappeal-amp;dest-lockchoice.php.php" class="fly"><span>Locked Account Recovery</span></a></li> 
           <li><a href="redirect-mod-offence-appeal-amp;dest-index.php.php" class="fly"><span>Appeal Bans &amp; Mutes</span></a></li> 
           <li><a href="services/m=bugtracker_v4/index.php" class="fly"><span>Submit a Bug Report</span></a></li> 
           <li><a href="parents.php" class="fly"><span>Parents' Guide</span></a></li> 
          </ul> <!--[if lte IE 6]></td></tr></table></a><![endif]--> </li> 
         <li class="top"><a href="secure/login.php" id="login" class="tl"><span class="ts">Log In</span></a></li> 
        </ul> 
        <br class="clear"> 
       </div> 
      </nav> 
      <div class="PageBody1">
       <div class="PageBody2">
        <div class="PageFoot">
         <div class="PageHead"> 
          <div id="left"> 
           <div id="slider" class="Shadow sliderJS"> 
            <div class="Shadow"></div> 
            <div class="Caster"> 
             <img class="slide" src="img/main/homepage/banners/king-of-the-dwarves.jpg" alt=""> 
             <img class="slide" src="img/main/homepage/banners/10th-anniversary.jpg" alt=""> 
             <img class="slide" src="img/main/homepage/banners/game-bar.jpg" alt=""> 
             <div id="slideCaption"></div> <a href="title_video_popup.php" class="caption" target="_blank"> <h3>King of the Dwarves</h3> <span>Civil unrest and chaos dwarves beset the Consortium. Can Keldagrim's problems be solved by the king of the dwarves?</span> </a> <a href="competition_details.php" class="caption" style="display: none;"> <h3>RuneScape’s 10th Anniversary Giveaway</h3> <span>Celebrate RuneScape’s 10th anniversary with us and win $10,000 every month!</span> </a> <a href="services/m=toolbar/download.php" class="caption" style="display: none;" target="_blank"> <h3>RuneScape Game Bar</h3> <span>Access RuneScape with one click of a button. Be the first to know the latest RuneScape news, and check the status of your Grand Exchange offers.</span> </a> 
             <div id="sliderControls">
              <a href="title-news-0-amp;banner-2.php" id="sliderPrev"><span>prev</span></a>
              <ul id="sliderList">
               <a href="title-news-0-amp;banner-0.php" class="current"><span>1</span></a><a href="title-news-0-amp;banner-1.php"><span>2</span></a><a href="title-news-0-amp;banner-2.php"><span>3</span></a>
              </ul><a href="title-news-0-amp;banner-1.php" id="sliderNext"><span>next</span></a>
             </div> 
            </div> 
           </div> 
           <div id="news" class="Shadow"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <a href="title-news-0-amp;banner-0.php" class="newsTab newsTabSelected" id="newsTabLatest">Latest News</a> <a href="title-news-1-amp;banner-0.php" class="newsTab" id="newsTabDevblog">Dev Blogs</a> <a href="title-news-2-amp;banner-0.php" class="newsTab" id="newsTabArticles">Articles</a> 
             <div class="newsContent newsContentSelected"> <a href="services/m=news/the-wilderness-and-free-trade-will-return.php" class="newsItem newsItemSelected"> <h3> <img class="newsIcon" src="img/main/news/icons/wilderness_vote-1.jpg" alt=""> <span class="newsTitle">The Wilderness and Free Trade Will Return!</span> <span class="newsPosted">Posted 17-Jan-2011</span> </h3> <img class="newsImage" src="img/main/news/icons/wilderness_vote-1.jpg" alt=""> <p>Over 91% of you voted in favour of reintroducing the Wilderness and free trade in the first RuneScape Referendum. We have heard your call and will be restoring these much loved features to RuneScape on Tuesday 1st February.</p> 
               <div class="newsFlag">
                 Jan
                <br>17 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=news/hati--the-winter-wolf.php" class="newsItem"> <h3> <img class="newsIcon" src="img/main/news/icons/event/winter_wolf-1.jpg" alt=""> <span class="newsTitle">Hati – The Winter Wolf</span> <span class="newsPosted">Posted 17-Jan-2011</span> </h3> <img class="newsImage" src="img/main/news/icons/event/winter_wolf-1.jpg" alt=""> <p>The legendary wolf, Hati, is stalking the Fremennik Province for prey. Band together with other adventurers (and Jagex mods), then take him out. Rewards include a cosmetic wolf hat, and some wolf gloves that grant you double XP in combat skills for a short while.</p> 
               <div class="newsFlag">
                 Jan
                <br>17 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=news/runescape-referendum-voting-closed.php" class="newsItem"> <h3> <img class="newsIcon" src="img/main/news/icons/wilderness_vote-1.jpg" alt=""> <span class="newsTitle">RuneScape Referendum: Voting Closed</span> <span class="newsPosted">Posted 14-Jan-2011</span> </h3> <img class="newsImage" src="img/main/news/icons/wilderness_vote-1.jpg" alt=""> <p>Voting has now closed on the Wilderness and Free Trade Referendum. Thank you for all of your votes, comments and feedback. We will be making an official announcement on Monday 17th January.</p> 
               <div class="newsFlag">
                 Jan
                <br>14 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=news/the-final-cakedown.php" class="newsItem"> <h3> <img class="newsIcon" src="img/main/news/icons/speech-1.jpg" alt=""> <span class="newsTitle">The Final Cakedown!</span> <span class="newsPosted">Posted 14-Jan-2011</span> </h3> <img class="newsImage" src="img/main/news/icons/speech-1.jpg" alt=""> <p>The grand finale of our 10th anniversary celebrations takes place this weekend and we're marking the occasion in style.</p> 
               <div class="newsFlag">
                 Jan
                <br>14 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=news/get-involved-with-the-clan-community.php" class="newsItem"> <h3> <img class="newsIcon" src="img/main/news/icons/speech-1.jpg" alt=""> <span class="newsTitle">Get Involved with the Clan Community</span> <span class="newsPosted">Posted 14-Jan-2011</span> </h3> <img class="newsImage" src="img/main/news/icons/speech-1.jpg" alt=""> <p>RuneScape’s Clan Community has a rich and noble heritage, so we want to celebrate that success with a host of challenging and fun events! Are you ready to join a clan?</p> 
               <div class="newsFlag">
                 Jan
                <br>14 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=news/runescape-referendum-last-chance-to-vote.php" class="newsItem"> <h3> <img class="newsIcon" src="img/main/news/icons/wilderness_vote-1.jpg" alt=""> <span class="newsTitle">RuneScape Referendum: Last Chance to Vote!</span> <span class="newsPosted">Posted 13-Jan-2011</span> </h3> <img class="newsImage" src="img/main/news/icons/wilderness_vote-1.jpg" alt=""> <p>With only a short time left before the first ever RuneScape Referendum closes at midday on Friday 14th January, make sure your vote counts and your voice is heard.</p> 
               <div class="newsFlag">
                 Jan
                <br>13 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=news/latest_news.rss" class="newsRSS Olde"><span>RSS</span> <img src="img/main/homepage/rss_icon.png" alt="RSS"></a> <a href="services/m=news/list.php" class="newsMore">Even more News &gt;</a> 
             </div> 
             <div class="newsContent"> <a href="services/m=devblog/view_post-post_id-112.php" class="newsItem newsItemSelected"> <h3> <img class="newsIcon" src="img/services/blog/qna-1.png" alt=""> <span class="newsTitle">The Next Six Years</span> <span class="newsPosted">Posted 13-Jan-2011</span> </h3> <img class="newsImage" src="img/services/blog/qna-1.png" alt=""> <p>Just as RuneScape reaches its 10th anniversary, Paul takes a look back at key moments in the history of RuneScape and Jagex. This part covers the next six years (2005-2010).</p> 
               <div class="newsFlag">
                 Jan
                <br>13 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=devblog/view_post-post_id-110.php" class="newsItem"> <h3> <img class="newsIcon" src="img/services/blog/design-1.png" alt=""> <span class="newsTitle">Clan Identity</span> <span class="newsPosted">Posted 07-Jan-2011</span> </h3> <img class="newsImage" src="img/services/blog/design-1.png" alt=""> <p>Mod Maz and Mod Roderick go over a couple of the things we're planning for clans.</p> 
               <div class="newsFlag">
                 Jan
                <br>7 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=devblog/view_post-post_id-111.php" class="newsItem"> <h3> <img class="newsIcon" src="img/services/blog/qna-1.png" alt=""> <span class="newsTitle">The First Four Years</span> <span class="newsPosted">Posted 06-Jan-2011</span> </h3> <img class="newsImage" src="img/services/blog/qna-1.png" alt=""> <p>Just as RuneScape reaches its 10th anniversary, Paul takes a look back at key moments in the history of RuneScape and Jagex. This part covers the first four years (2001-2004).</p> 
               <div class="newsFlag">
                 Jan
                <br>6 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=devblog/view_post-post_id-109.php" class="newsItem"> <h3> <img class="newsIcon" src="img/services/blog/dev-1.png" alt=""> <span class="newsTitle">Tools for Clans</span> <span class="newsPosted">Posted 07-Dec-2010</span> </h3> <img class="newsImage" src="img/services/blog/dev-1.png" alt=""> <p>Clans are a big part of the RuneScape community, however, the tools that clans currently have available are very limited. It's not going to be a small or quick job to resolve this, but the ball is now very much rolling.</p> 
               <div class="newsFlag">
                 Dec
                <br>7 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=devblog/view_post-post_id-108.php" class="newsItem"> <h3> <img class="newsIcon" src="img/services/blog/graphics-1.png" alt=""> <span class="newsTitle">Dragon Scimitar</span> <span class="newsPosted">Posted 01-Dec-2010</span> </h3> <img class="newsImage" src="img/services/blog/graphics-1.png" alt=""> <p>RuneScape's Lead Animator, Mod Paul B, gives a quick overview of the technical underpinnings behind the recent redesign of the dragon scimitar.</p> 
               <div class="newsFlag">
                 Dec
                <br>1 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=devblog/view_post-post_id-107.php" class="newsItem"> <h3> <img class="newsIcon" src="img/services/blog/manage-1.png" alt=""> <span class="newsTitle">Clan Submissions Page</span> <span class="newsPosted">Posted 11-Nov-2010</span> </h3> <img class="newsImage" src="img/services/blog/manage-1.png" alt=""> <p>This month the Clan Submissions Page is back and it's jam-packed! We have an interview with Wilderness Guardians founder and leader His Lordship and some fantastic clan art with an added birthday article...</p> 
               <div class="newsFlag">
                 Nov
                <br>11 
               </div> <span class="newsExpand Olde">More &gt;</span></a> <a href="services/m=devblog/rss.php" class="newsRSS Olde"><span>RSS</span> <img src="img/main/homepage/rss_icon.png" alt="RSS"></a> <a href="services/m=devblog/index.php" class="newsMore">Even more Developers' Blogs &gt;</a> 
             </div> 
             <div class="newsContent"> <a href="kbase/guid/ancient_prison.php" class="newsItem newsItemSelected newsItemNoFlag"> <h3> <img class="newsIcon" src="img/main/homepage/articles/areaguides.jpg" alt=""> <span class="newsTitle">Ancient Prison (Members)</span> </h3> <img class="newsImage" src="img/main/homepage/articles/areaguides.jpg" alt=""> <p>Remember: you will die!</p> <span class="newsExpand Olde">More &gt;</span></a> <a href="kbase/guid/king_of_the_dwarves_members.php" class="newsItem newsItemNoFlag"> <h3> <img class="newsIcon" src="img/main/homepage/articles/quests.jpg" alt=""> <span class="newsTitle">King of the Dwarves (Members)</span> </h3> <img class="newsImage" src="img/main/homepage/articles/quests.jpg" alt=""> <p>Is there an heir to Keldagrim's throne?</p> <span class="newsExpand Olde">More &gt;</span></a> <a href="kbase/guid/christmas_2010.php" class="newsItem newsItemNoFlag"> <h3> <img class="newsIcon" src="img/main/homepage/articles/customersupport.jpg" alt=""> <span class="newsTitle">Christmas 2010 - O Little Town of Daemonheim</span> </h3> <img class="newsImage" src="img/main/homepage/articles/customersupport.jpg" alt=""> <p>Rest Ye Merry Barbarian.</p> <span class="newsExpand Olde">More &gt;</span></a> <a href="kbase/guid/do_no_evil_members.php" class="newsItem newsItemNoFlag"> <h3> <img class="newsIcon" src="img/main/homepage/articles/quests.jpg" alt=""> <span class="newsTitle">Do No Evil (Members)</span> </h3> <img class="newsImage" src="img/main/homepage/articles/quests.jpg" alt=""> <p>Return monkeys to their rightful place in...the desert?</p> <span class="newsExpand Olde">More &gt;</span></a> <a href="kbase/guid/herblore_herblore_habitat.php" class="newsItem newsItemNoFlag"> <h3> <img class="newsIcon" src="img/main/homepage/articles/skills.jpg" alt=""> <span class="newsTitle">Herblore - Herblore Habitat (Members)</span> </h3> <img class="newsImage" src="img/main/homepage/articles/skills.jpg" alt=""> <p>Voodoo meets herblore.</p> <span class="newsExpand Olde">More &gt;</span></a> <a href="kbase/guid/controls_banks.php" class="newsItem newsItemNoFlag"> <h3> <img class="newsIcon" src="img/main/homepage/articles/minigames.jpg" alt=""> <span class="newsTitle">Controls - Banks</span> </h3> <img class="newsImage" src="img/main/homepage/articles/minigames.jpg" alt=""> <p>Store your well earned treasure in one of the many banks of RuneScape.</p> <span class="newsExpand Olde">More &gt;</span></a> 
             </div> 
            </div> 
           </div> <a name="hot"></a> 
           <div id="hotTopics" class="community Shadow"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <a href="services/m=forum/forums.php" class="communityTitle"><h2>Hot Forum Topics</h2></a> <a href="services/m=forum/forums-13,14,864,62041246.php" class="hot"> <span class="hotImage"> <img src="img/services/news_announcements_2.gif" alt=""> <span></span> </span> <h3>$10,000 a month giveaway.</h3> Posted by Mod&nbsp;Paul&nbsp;M on 21-Dec-2010 </a> <a href="services/m=forum/forums-15,16,165,62155005.php" class="hot"> <span class="hotImage"> <img src="img/services/player_vs_monster.gif" alt=""> <span></span> </span> <h3>God Wars – The Ancient Prison</h3> Posted by Mod&nbsp;Chris&nbsp;L on 10-Jan-2011 </a> <a href="services/m=forum/forums-25,26,254,62169716.php" class="hot"> <span class="hotImage"> <img src="img/services/tech_support_2.gif" alt=""> <span></span> </span> <h3>Engine Team Q&amp;A - Part 1</h3> Posted by Mod&nbsp;Dowd on 13-Jan-2011 </a> <a href="services/m=forum/forums-198,199,13,62136034.php" class="hot"> <span class="hotImage"> <img src="img/services/JL_icon.jpg" alt=""> <span></span> </span> <h3>Dev Blog: First Four Years</h3> Posted by Paul on 06-Jan-2011 </a> <a href="services/m=forum/forums-16,17,689,62163886.php" class="hot"> <span class="hotImage"> <img src="img/services/duelling_2.gif" alt=""> <span></span> </span> <h3>Wildy/Free Trade Thoughts ....</h3> Posted by Mod&nbsp;Stevew on 12-Jan-2011 </a> <a href="services/m=forum/forums.php" class="communityMore">Visit Forums &gt;</a> 
            </div> 
           </div> <a name="poll"></a> 
           <div id="poll" class="community Shadow"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <span class="communityTitle"><h2>Quick Poll</h2></span> 
             <form action="accept_vote.ws" method="post"> 
              <input type="hidden" value="45" name="pollid"> 
              <h3>When are you planning to take on Nex?</h3> 
              <ul> 
               <li> <input class="pollRadio" type="radio" name="voteid" id="pollVote0" value="0"> <label for="pollVote0"> Already done – I have bruises! </label> </li> 
               <li> <input class="pollRadio" type="radio" name="voteid" id="pollVote1" value="1"> <label for="pollVote1"> When more people have tried </label> </li> 
               <li> <input class="pollRadio" type="radio" name="voteid" id="pollVote2" value="2"> <label for="pollVote2"> Soon – I’m getting ready! </label> </li> 
               <li> <input class="pollRadio" type="radio" name="voteid" id="pollVote3" value="3"> <label for="pollVote3"> When I can get a decent team together </label> </li> 
               <li> <input class="pollRadio" type="radio" name="voteid" id="pollVote4" value="4"> <label for="pollVote4"> Not for me – I’m a Skiller not a killer! </label> </li> 
              </ul> <span class="Button Button27Green"><span><span><span><b>vote</b><input value="" type="submit" title="vote"></span></span></span></span> 
             </form> 
            </div> 
           </div> 
          </div> 
          <div id="right"> <a class="feature Shadow" href="wilderness.php" id="wildyButton"> <img src="img/main/countdown/wildy_countdown_button.jpg" class="buttonBack" alt="The Wilderness &amp; Free Trade Return in 15"> 
            <div id="counter" style="top: 11px;left: 186px;"> 
             <ul> 
              <ul id="days_left"> 
               <li><img src="img/main/countdown/tiles45x49/1.png" alt="1"></li> 
               <li><img src="img/main/countdown/tiles45x49/5.png" alt="5"></li> 
              </ul> 
             </ul> 
            </div> </a> 
           <div id="Shadow1"></div> 
           <div id="Shadow2"></div> 
           <div id="advert" class="Shadow"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <iframe src=" " allowtransparency="true" width="305" height="276" scrolling="no" frameborder="0"></iframe>
            </div> 
           </div> <a class="feature Shadow" id="fUpgrade" href="members/members.php"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <span class="featureImg"><span></span></span> 
             <h3>Upgrade Account</h3> 
             <p>Want more RuneScape? Subscribe now to gain access to much more content. - <span>Upgrade&nbsp;&gt;</span></p> <span class="featureTip"></span> 
            </div> </a> <a class="feature Shadow" id="fProfile" href="services/m=adventurers-log/display_player_profile.php"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <span class="featureImg"><span></span></span> 
             <h3>Player Profile</h3> 
             <p>View a log of what you and your friends have been up to in the world of RuneScape. - <span>View&nbsp;&gt;</span></p> <span class="featureTip"></span> 
            </div> </a> <a class="feature Shadow" id="fGuide" href="kbase/guid/manual.php"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <span class="featureImg"><span></span></span> 
             <h3>Game Guide</h3> 
             <p>Brush up on your knowledge of RuneScape with all kinds of game guides. - <span>Learn more&nbsp;&gt;</span></p> <span class="featureTip"></span> 
            </div> </a> <a class="feature Shadow" id="fHiscore" href="services/m=hiscore/hiscores.php"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <span class="featureImg"><span></span></span> 
             <h3>Hiscores</h3> 
             <p>Compare your progress with the rest of RuneScape's adventurers. - <span>Compare&nbsp;&gt;</span></p> <span class="featureTip"></span> 
            </div> </a> <a class="feature Shadow" id="fGrand" href="services/m=itemdb_rs/frontpage.php"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <span class="featureImg"><span></span></span> 
             <h3>Grand Exchange</h3> 
             <p>Track the prices of every item you can buy and sell on the Grand Exchange. - <span>View&nbsp;&gt;</span></p> <span class="featureTip"></span> 
            </div> </a> <a class="feature Shadow" id="fBar" href="services/m=toolbar/download.php"> 
            <div class="Shadow"></div> 
            <div class="Caster"> <span class="featureImg"><span></span></span> 
             <h3>Game Bar</h3> 
             <p>Install the Game Bar in your browser – it’s packed full of useful tools. - <span>Learn more&nbsp;&gt;</span></p> <span class="featureTip"></span> 
            </div> </a> 
          </div> 
          <p id="pageFooter"> <a href="kbase/guid/jagex.php">About Us</a> | <a href="privacy/privacy.php">Privacy Policy</a> | <a href="terms/terms.php">Terms &amp; Conditions</a> | <a href="kbase/guid/Customer_Support.php">Customer Support</a> <br> <a href="#top">^ top of page ^</a> </p> 
         </div>
        </div>
       </div>
      </div> 
      <div id="Footer">
       <footer> 
        <div id="Explore"> 
         <h2 class="Olde">Explore RuneScape.com</h2> 
         <form id="FooterSearch" action="kbase/search.php" method="post"> 
          <input type="hidden" name="keywords_chk" value="1"> 
          <input type="hidden" name="body_chk" value="1"> 
          <input type="hidden" name="title_chk" value="1"> 
          <input type="hidden" name="description_chk" value="1"> 
          <input type="text" id="footer_search_query" name="search_query" placeholder="Search..."> 
          <div class="HoverImg">
           <button type="submit" name="kbsearch_button"><img src="img/main/footer/FooterSearchButton.jpg" alt="Search"></button>
          </div> 
         </form> 
         <div id="Lang"> <a href="title-set_lang-0.php"><img alt="English" title="English" src="img/main/lang/en.gif"></a> <a href="l=1/title-set_lang-1.php"><img alt="Deutsch" title="Deutsch" src="img/main/lang/de.gif"></a> <a href="l=2/title-set_lang-2.php"><img alt="Français" title="Français" src="img/main/lang/fr.gif"></a> <a href="l=3/title-set_lang-3.php"><img alt="Português (BR)" title="Português (BR)" src="img/main/lang/br.gif"></a> 
         </div> 
        </div> 
        <div id="FooterNav">
         <nav> 
          <div class="FooterNavLeft"> 
           <h2 class="Olde">What's New?</h2> <a href="services/m=news/list.php">Recent News</a>, <a href="services/m=news/list-cat-1.php">Game News</a>, <a href="services/m=devblog/index.php">Developer Blogs</a>, <a href="services/m=news/list-cat-6.php">Behind the Scenes</a>, <a href="services/m=news/latest_news.rss">RSS Feed</a> 
          </div> 
          <div> 
           <h2 class="Olde">Clans &amp; Community</h2> <a href="kbase/guid/clan_info.php">Clan Info</a>, <a href="services/m=hiscore/hiscores.php">Hiscores</a>, <a href="kbase/guid/fansites.php">Fansites</a>, <a href="services/m=adventurers-log/index.php">Adventurer's Log</a> <a href="kbase/guid/gallery.php">Players' Gallery</a>, <a href="kbase/guid/postbag.php">Postbag from the Hedge</a> 
          </div> 
          <div> 
           <h2 class="Olde">Game Help</h2> <a href="kbase/guid/manual.php">Game Manual</a>, <a href="services/m=questhelp/index.php">QuestHelp</a>, <a href="services/m=itemdb_rs/frontpage.php">Grand Exchange</a>, <a href="kbase/guid/area_guides.php">Area Guides</a>, <a href="kbase/guid/skills.php">Skill Guides</a>, <a href="kbase/guid/quests0.php">Quest Guides</a>, <a href="kbase/guid/about_runescape.php">What is RuneScape?</a>, <a href="kbase/search.php">Search Game Manual</a> 
          </div> 
          <div> 
           <h2 class="Olde">Hiscores</h2> <a href="services/m=hiscore/overall-category_type-0.php">Skills</a>, <a href="services/m=hiscore/overall-table-25-amp;category_type-0.php">Dungeoneering</a>, <a href="services/m=hiscore/overall-table-21-amp;category_type-0.php">RuneCrafting</a>, <a href="services/m=hiscore/overall-table-19-amp;category_type-0.php">Slayer</a>, <a href="services/m=hiscore/overall-table-24-amp;category_type-0.php">Summoning</a>, <a href="services/m=hiscore/overall-table-6-amp;category_type-0.php">Prayer</a>, <a href="services/m=hiscore/overall-table-0-amp;category_type-1.php">Duel Tournament</a>, <a href="services/m=hiscore/overall-table-10-amp;category_type-1.php">Conquest</a>, <a href="services/m=hiscore/overall-table-9-amp;category_type-1.php">Castle Wars</a>, <a href="services/m=hiscore/overall-table-1-amp;category_type-1.php">Bounty Hunters</a>, 
          </div> 
          <div class="FooterNavLeft"> 
           <h2 class="Olde">My Account</h2> <a href="game.php" id="FooterPlay">Play RuneScape MMO</a>, <a href="services/m=toolbar/download.php">RuneScape Game Bar</a>, <a href="game-autocreate-true.php" id="footerPlay">Create Account</a>, <a href="members/members.php">Upgrading My Account</a>, <a href="account_management.php">Account Management</a> 
          </div> 
          <div> 
           <h2 class="Olde">Help</h2> <a href="kbase/guid/Customer_Support.php">Customer support</a>, <a href="redirect.php%3Fmod=www&amp;dest=loginapplet/loginapplet-mod-accountappeal-amp;dest-passwordchoice.php.php">Password Recovery</a>, <a href="redirect.php%3Fmod=www&amp;dest=loginapplet/loginapplet-mod-accountappeal-amp;dest-lockchoice.php.php">Account Recovery</a>, <a href="redirect-mod-offence-appeal-amp;dest-index.php.php">Appeal Centre</a>, <a href="redirect-mod-offence-appeal-amp;dest-index.php.php">Locked Accounts</a>, <a href="services/m=bugtracker_v4/index.php">Bug Reports</a>, <a href="parents.php">Parents’ Guide</a>, <a href="options.php">Java Options</a>, <a href="kbase/guid/manual.php">Game Help</a> 
          </div> 
          <div> 
           <h2 class="Olde">Forums</h2> <a href="services/m=forum/forums-14,15.php">General</a>, <a href="services/m=forum/forums-15,16.php">Recent Updates</a>, <a href="services/m=forum/forums-16,17.php">Future Updates</a>, <a href="services/m=forum/forums-135,136.php">Clan Discussion</a>, <a href="services/m=forum/forums-42,43.php">Events</a>, <a href="services/m=forum/forums-75,76.php">Distractions and Diversions</a>, <a href="services/m=forum/forums-250,251.php">Account Help</a>, <a href="services/m=forum/forums-154,155.php">Skills</a>, <a href="services/m=forum/forums-20,21.php">Quests</a> 
          </div> 
          <div> 
           <h2 class="Olde">More...</h2> <a href="kbase/guid/Downloads_and_Wallpapers.php">Wallpapers</a>, <a href="kbase/guid/lore.php">Lores and Histories</a>, <a href="kbase/guid/Downloads_and_Wallpapers.php">Downloads</a>, <a href="http://www.jagexstore.com/" target="_blank">Jagex Store</a> 
          </div> 
         </nav>
        </div> 
        <p id="FooterLegal"> This website and its contents are copyright © 1999 - 2011 Jagex Ltd<br> Use of this website is subject to our <a href="terms/terms.php">Terms &amp; Conditions</a> and <a href="privacy/privacy.php">Privacy Policy</a>. <a id="FooterLogo" href="jagex.com/index.php"><img src="img/main/footer/footerLogo.jpg" alt="Jagex Games Studio"></a> </p> 
       </footer>
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
 </body>
</html>