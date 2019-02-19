var xhr = new XMLHttpRequest();

request.open("GET", 'https://en.wikipedia.org/w/api.php?action=query&titles=Main Page&rvprop=content&prop=revisions&format=json', true);
request.send(null);

