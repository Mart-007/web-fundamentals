$(document).ready(function(){
    var key = "ed03395a79a4b08fd94825a51a0663de"; 
    $("form").on("submit", function(e){
        e.preventDefault();
        $.post("/weathers/get_weather",$(this).serialize(), function(data){
            $.get(`http://api.openweathermap.org/data/2.5/weather?q=${data}&appid=${key}`, function(weather){

              $(".weather")
                .append(`
                    <div class="card">
                            <div class="title">
                                <h2 class="title">${weather.name}</h2>
                                <h3 class="subtitle">Forecast: ${weather.weather[0].description}</h3>
                            </div>
                            <div class="temp">
                                <p>Temperature:${Math.ceil((1.8*(weather.main.temp - 273) + 32))}</p>
                                <p>Max Temperature:${Math.ceil((1.8*(weather.main.temp_max - 273) + 32))}</p>
                                <p>Min Temperature:${Math.ceil((1.8*(weather.main.temp_min - 273) + 32))}</p></div>
                            </div>
                    </div>`);
            });
        })
        $("form input[type='text']").val("");
        return false;
    })
})