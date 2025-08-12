Close Save View ehdduael/L3_Vocaloid_DB/admin/add_song.phpAutoSaveValidate HTMLValidate CSS
1
<?php
2
//check user is logged in as admin
3
if (isset($_SESSION['admin'])) {
4
​
5
// retrieve info from database
6
include("gather_info.php");
7
​
8
​
9
?>
10
​
11
<div class = "admin-form">
12
​
13
<h1>Add a Song</h1>
14
​
15
    <form action="index.php?page=../admin/insert_song" method="post">
16
​
17
        <p><input name="song_eng" placeholder="Song name (English) (required)" required/></p>
18
        <p><input name="song_jpn" placeholder="Song name (Japanese)"/></p>
19
        <p>Please insert up to two Vocaloid / Utauloid / SynthV that sing in the song </p>
20
​
21
        
22
        <div class="autocomplete">
23
            <input name="singer_1" id="singer_1" placeholder="Main Singer (required)" required />
24
        </div>
25
        
26
        <br /><br />
27
​
28
        <div class="autocomplete">
29
            <input name="singer_2" id="singer_2"placeholder="Secondary Singer" />
30
        </div>
31
​
32
        <p>Is the main singer a Vocaloid?</p>
33
        <select class="form-choose" name="boolean">
34
            <option value=0 selected>No</option>
35
            <option value=1>Yes</option>
36
        </select>
37
        
38
        <br /><br />
39
​
40
        <p>Who is the producer credited to this song?</p>
41
        <div class="autocomplete">
42
            <input name="producer" id="producer" placeholder="Song Producer (required)" required />
43
        </div>
44
        
45
        <p>When was the song released?</p>
46
        <p><input type="number" min=2000 max=<?php echo date('Y');?> name="year" placeholder="Year released (required)" required/></p>
47
        
48
        <p>What is the length of the song (minutes : seconds)?</p>
49
        <div>
50
            <input class="smaller" type="number" min=0 name="minutes" placeholder="Minutes (required)" required>
51
            :
52
            <input class="smaller" type="number" min=0 max=59 name="seconds" placeholder="Seconds (required)" required>
53
        </div>
54
        
55
        <p>How many veiws does the song have on youtube? (minimum of 1000 and the video must be provided below as well)</p>
56
        <p><input type="number" min=1000 name="youtube_veiws" placeholder="Number of youtube veiws (rounded up)" required/></p>
57
        <p><input type="url" name="yt_link" placeholder="Link to Youtube video  (required)" required/></p>
58
        
59
​
60
        <p>What are two main themes of the song?</p>
61
        <div class="autocomplete">
62
            <input type="text" name="theme1" id="theme_1" placeholder="Main Theme (required)" required/>
63
        </div>
64
​
65
        <br /><br />
66
​
67
        <div class="autocomplete">
68
            <input type="text" name="theme2" id="theme_2" placeholder="Secondary Theme"/>
69
        </div>
70
​
71
        <br /><br />
72
        
73
        <p><input class="form-submit" type="submit" name="submit" value="Submit Song"/></p>
74
​
