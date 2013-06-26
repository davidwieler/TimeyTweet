UrTweet
=======

UrTweet is a jquery plugin for grabbing a user's timeline.  
It can be used as a remote service to serve multiple clients, or set up locally to pull your own tweets in.

##Locally Executed version

**Include jQuery and the jstweet.js file**
```
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<script src="jstweet.js" type="text/javascript"></script>
```

**Set up the javascript function with the following vars:**  
username - The twitter username you want to fetch.  
numOfTweetsToReturn - How many tweets to return, must be an int.  

```
<script>
$(function(){
  UrTweet.loadTweets('username','numOfTweetsToReturn(int)');
});
</script>
```
