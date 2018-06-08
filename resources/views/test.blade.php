<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>LaravelTest</title>
</head>
<body>
    <div class="container-fluid zadacha_1">
        <div class="row">
            <div class="container col-lg-10">
                <button type="button" class="btn">Завдання 1</button>
                <button type="button" class="btn">Завдання 2</button>
                <button type="button" class="btn">Завдання 3</button>
                <button type="button" class="btn">Завдання 4</button>
                <button type="button" class="btn">Завдання 5</button>
                <button type="button" class="btn">Завдання 6</button>
                <button type="button" class="btn">Завдання 7</button>
                <button type="button" class="btn">Завдання 8</button>
                <button type="button" class="btn">Завдання 9</button>
                <button type="button" class="btn">Завдання 10</button>

            </div>
            <div class="clearfix"></div>

        <!-- Завдання 1 -->
            <div class="container">
                <div class="container zavd">
                    <h3>Написать алгоритм решения задачи:  </h3>
                    <p>В классе 28 учеников. 75% из них занимаются спортом. 
                        Сколько учеников в классе занимаются спортом и сколько всего учеников в классе?</p>                
                </div>
                <div class="container vidp">
                    <h5>Відповідь:</h5>
                    <p id="zavd_1"></p>
                    <pre><code class="pre-scrollable">
                    var schoolBoy = 28;
                    var pupilsSport;
                    var sport = 75;
                    var rezult;
                        
                    rezult = (sport / 100) * schoolBoy;
                        
                    document.getElementById('zavd_1').innerHTML = 'Всього навчаються учнів в класі - ' + schoolBoy + ';<br> 
                                                                + 'Кількість учнів котрі займаються спортом - ' + rezult + ';';</code></pre>                
                </div>
            </div>
        <!-- кінець завдання 1 -->
        <!-- Завдання 2 -->
            <div class="container">
                <div class="container zavd_2">
                    <h3>Реализовать алгоритм  извлечения числовых значений со строки:</h3>
                    <p>This server has 386 GB RAM and 5000 GB storage</p>
                </div>
                <div class="container vidp">
                    <h5>Відповідь:</h5>
                    <p id="zavd_2"></p>
                    <pre><code>
                        function filter(s) {
                            var r, re;
                            var s = 'This server has 386 GB RAM and 5000 GB storage';
                            
                            re = /\D+/ig;
                            r = s.replace(re, ',');
                                return(r);

                            }

                            document.getElementById('zavd_2').innerHTML =  filter();
                    </code></pre>
                </div>
            </div>
        <!-- кінець завдання 2 -->
            <!-- Завдання 3 -->
            <div class="container">
                <div class="container zavd_3">
                    <h3>​ Как получить первый элемент массива?</h3>
                    <p>масив - [2,3,56,65,56,44,34,45,3,5,35,345,3,5]</p>
                </div>
                <div class="container vidp">
                    <h5>Відповідь:</h5>
                    <p id="zavd_3"></p>
                    <p>Кожний елемент масиву має свій індекс, до нього можна звертатися через [],
                        порядковий номер починається із 0.</p>
                    <pre><code>
                        var mas = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];

                        document.getElementById('zavd_3').innerHTML = 'Перший елемент масиву - ' + mas[0];
                    </code></pre>
                </div>
            </div>
        <!-- кінець завдання 3 -->
        <!-- Завдання 4 -->
            <div class="container">
                <div class="container zavd_4">
                    <h3>Как вычислить остаток от деления 10/3</h3>
                </div>
                <div class="container vidp">
                    <h5>Відповідь:</h5>
                    <p id="zavd_4"></p>
                    <p>наприклад в js є %, що означає залишок при ділені.</p>
                    <pre><code>
                        ost = 10 % 3;

                        document.getElementById('zavd_3').innerHTML = 'залишок при ділені 10/3 - ' + ost;
                    </code></pre>
                </div>
            </div>
            <!-- кінець завдання 4 -->
        <!-- Завдання 5 -->
            <div class="container">
                <div class="container zavd_5">
                    <h3>Нужно поменять 2 переменные местами без использования третьей</h3>
                </div>
                <div class="container vidp">
                    <h5>Відповідь:</h5>
                    <p id="zavd_5"></p>
                    <p>За допомогою функій потрібно перетворити масив в строку, вирізати та вставити $a в $b,
                        із $b вирізати символи які починаються із індекса 10 та вставти в зміну $a. $b перетворити у масив.
                    (один із варіантів)</p>
                    <pre><code>

                    </code></pre>
                </div>
            </div>
            <!-- кінець завдання 5 -->
        <!-- Завдання 6 -->
            <div class="container">
                <div class="container zavd_6">
                    <h3>Чем отличается оператор == от === ? </h3>
                </div>
                <div class="container vidp">
                    <h5>Відповідь:</h5>
                    <p id="zavd_6"></p>
                    <p>оператор сувора рівність (===) - порівнює значення і тип, а (==) не сувора рівність порівнює лише значення </p>
                    <pre><code>

                    </code></pre>
                </div>
                </div>
            <!-- кінець завдання 6 -->
        <!-- Завдання 7 -->
            <div class="container">
                <div class="container zavd_7">
                    <h3>Чем отличается require от include ?</h3>
                </div>
                <div class="container vidp">
                    <h5>Відповідь:</h5>
                    <p id="zavd_7"></p>
                    <p>При підключені файду через inclede якщо файл не був найдений він провірить папку в котрій находиться скрипт який підключають і робочу папку, якщо не знайде видасть помилку і продовжить роботу.
                        при require видасть фатальну помилку і на сторінку нічого не виведеться після строки require.
                    </p>
                    <pre><code>

                    </code></pre>
                </div>
            </div>
        <!-- кінець завдання 7 -->
        <!-- Завдання 8 -->
            <div class="container">
                <div class="container zavd_8">
                    <h3>Какие данные пользователя сайта из перечисленных можно считать на 100% достоверными: cookie, 
                        данные сессии, IP-адрес пользователя , User-Agent? Почему? </h3>
                </div>
                <div class="container vidp">
                    <h5>Відповідь:</h5>
                    <p id="zavd_8"></p>
                    <blockquote class="blockquote text-right">
                        <p>ни одна система не является безопасной...</p>
                        <footer class="blockquote-footer text-right">фільм <cite>Хто я</cite></footer>
                    </blockquote>
                    <pre><code>

                    </code></pre>
                </div>
                </div>
        <!-- кінець завдання 8 -->
        <!-- Завдання 9 -->
            <div class="container">
                <div class="container zavd_9">
                    <h3>Что выведет следующий код на JavaScript и почему:</h3>
                    <pre><code>
                            for( var i =0; i < 10; i++) {
                                setTimeout(function () {         
                                    console.log(i);      
                                }, 100); 
                            }
                    </code></pre>
                </div>
                <div class="container vidp">
                    <h5>Відповідь:</h5>
                    <p id="zavd_9">
                        Виведе 10 строк із числом 10. цикл рахує від 1 до 10 і так 10 раз.
                        А функція setTimeout створює затримку початку нового циклу із затримкою в долю мілісикунди, адже 1000 - 1 мілісикунда.
                    </p>
                    
                </div>
                </div>
        <!-- кінець завдання 9 -->

        </div>
        
    </div>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>