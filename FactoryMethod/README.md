##Factory Method

**Порождающий**

![Factory Method diagram](FactoryMethod.png)

Предоставляет наследникам интерфейс для создания экземпляров какого-либо класса. Экземпляр какого именно класса
необходимо создать, определяется наследниками.

Представим, что у нас есть 2 завода по производству автомобилей - BMW и Chevrolet. Оба завода имеют одноимённый метод,
который возвращает продукцию завода, т.е. автомобиль. В коде это реализовано 2мя классами `BMWCarFactory` и
`ChevroletCarFactory`, которые реализуют общий интерфейс `CarFactory`.
 
Кроме того, у нас есть 2 продукта этих заводов - `BMW` и `Chevrolet`, которые реализуют интерфейс `Car`. В этом примере
с одного завода можно получить автомобили различных моделей - функция заводов `getProduct()` принимает параметр, который
описывает необходимую нам модель и передаёт её в конструктор автомобиля.

У каждого автомобиля реализован метод `getName`, который возвращает марку и модель авто.

* Для нового продукта (автомобиля новой марки) необходимо создание нового наследника `CarFactory`
