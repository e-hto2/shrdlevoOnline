//Configuration variables and Init variables
var version=1.44;

var randomTasks = false;
var numberAttempts = 5;
var debugMode = false;
var saveInServer = true;
var downloadJSON = false;
var dataFromSomata = true;

//loads the json with tasks and instructions with english words, and translate before starting using to the block language
var taskFile = "json/tasks.json";

//Array where the first element is the space
var tokensFile = "json/tokens.txt";

//json with posible works to use in the instructions, the tokens are randomize with a function. Number of sylabes will be the same
var wordsFile = "json/words.json";

//use https url for LOCAL testing
var urlLocal = "https://e-hto.github.io/shrdlevo/"; 
var urlData = "https://somata.inf.ed.ac.uk/shrdlevo/getData";

var experimentVersion = "shrdlevo";

