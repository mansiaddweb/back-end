let weather ={
    "apikey" :"599a28ac62ffc5807aedd9ec4bef1791",
    fetchweather: function(city){
        fetch("https://api.openweathermap.org/data/2.5/weather?q="+city+"&appid="+ this.apikey).then((response) =>  response.json()).then((data) => this.displayweather(data));
          
    },
    displayweather: function(data){
        const { name } =data;
        const { temp } =data.main;
        var tem=document.querySelector(".temp");
        tem.innerHTML=temp;
        console.log(name,temp);
    }
};