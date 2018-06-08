//Завдання 1
var schoolBoy = 28;
var pupilsSport;
var sport = 75;
var rezult;

rezult = (sport / 100) * schoolBoy;

document.getElementById('zavd_1').innerHTML = 'Всього навчаються учнів в класі - ' + schoolBoy + ';<br>' 
                                            + 'Кількість учнів котрі займаються спортом - ' + rezult + ';';


//Завдання 2
function filter(s) {
  var r, re;
  var s = 'This server has 386 GB RAM and 5000 GB storage';
  re = /\D+/ig;
  r = s.replace(re, ',');
    return(r);

}
// завдання 3
document.getElementById('zavd_2').innerHTML =  filter();

var mas = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];

document.getElementById('zavd_3').innerHTML = 'Перший елемент масиву - ' + mas[0];

// завдання 4
ost = 10 % 3;

document.getElementById('zavd_4').innerHTML = 'залишок при ділені 10/3 - ' + ost;

// завдання 5 
var a = [1, 2, 3, 4, 5];
var b = 'Hello world';
b += a.join();
a = b.split(',');

c= a.join();
b = a+b;

console.log(a,b,c);

for( var i =0; i < 10; i++) {
    setTimeout(function () {         
        console.log(i);      
    }, 100); 
} 