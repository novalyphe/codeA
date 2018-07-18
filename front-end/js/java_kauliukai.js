
	let array = [];

	retrieveLocalStorage();


	function kauliukai(){

		let x = Math.floor((Math.random() * 6) + 1);
		    let z = parseInt(document.getElementById("skaicius").value); //parse padaro kad tekstas butu skaicius
		    //console.log(x);
		    //console.log(z);
		    
		    

		    if ( z === x) {
		    	let c = '<br> <hr> Jus Laimejote <br> Jusu skaicius buvo: ' + z;
		    	//let k = '<br> <hr> Jus Laimejote <br> Jusu skaicius buvo: ' + z + '<br> Laimingas skaicius buvo: ' + array + '<br>';
		    	document.getElementById("ats").innerHTML = x + c;
		    	//console.log(c);
		    	//document.getElementById("istorija").innerHTML = k;

		    } 
		    else {
		    	let c = '<br> <hr> Jus Pralaimejote <br> Jusu skaicius buvo: ' + z;
		    	//let k = '<hr> Jus Pralaimejote <br> Jusu skaicius buvo: ' + z + '<br> Laimingas skaicius buvo: ' + array + '<br>';
		    	document.getElementById("ats").innerHTML = x + c;
		    	//console.log(c);
		    	//document.getElementById("istorija").innerHTML = k;

		    }

		    array.push(x);
		    printArray(array);
		    localStorage.setItem("loterija", array.toString());

		}

		function printArray(arr){
			var h = "";
			h = "<hr>" + "<ul>";
			for(var i = 0;i < arr.length;i++){
				console.log(arr[i]);
				h = h + "<li> Laimingas skaicius buvo: " + arr[i] + "</li>";
			}
			h = h + "</ul>";
			document.getElementById("istorija").innerHTML = h;
		}


		function retrieveLocalStorage(){
			//TODO: get shoppinglist from local storage
			var localstorage_data = localStorage.getItem("loterija");
			console.log(localstorage_data);
			var _arr = localstorage_data.split(',');
			//Display shopping list
			printArray(_arr);
		}

