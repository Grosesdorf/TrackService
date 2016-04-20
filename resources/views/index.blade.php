@extends('app')

@section('content')
<div class="container-fluid">
      <div class="starter-template">
        <h1>Информация по сервису</h1>  
        <div class="row">
          <div class="col-xs-12">
            <div class="table-responsive"> 
              <table class="table table-bordered">
                <thead>
                  <tr align="center">
                    <th>#</th>
                    <th>Марка</th>
                    <th>Модель</th>
                    <th>Гос.номер</th>
                    <th>Дата</th>
                    <th>Проверка машины</th>
                    <th>Показания одометра, км</th>
                    <th>Марка мот.масла</th>
                    <th width="50%">Сервис</th>
                    <th>Следующий сервис, км</th>
                    <th>Следующий сервис, дата</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="danger">
                    <td>1</td>
                    <td>VOLVO</td>
                    <td>FH 13.400</td>
                    <td>ВН1111ВЕ</td>
                    <td>10.04.2016</td>
                    <td>Нет</td>
                    <td>543000</td>
                    <td>MP XHPExtra10w40</td>
                    <td>Проверка смазки</td>
                    <td>80000</td>
                    <td>15.05.2016</td>
                  </tr>
                  <tr class="danger">
                    <td>2</td>
                    <td>VOLVO</td>
                    <td>FH 13.400</td>
                    <td>ВН1111ВЕ</td>
                    <td>10.04.2016</td>
                    <td>Нет</td>
                    <td>543000</td>
                    <td>MP XHPExtra10w40</td>
                    <td>Проверка уровня масел и прочих жидкостей</td>
                    <td>80000</td>
                    <td>15.05.2016</td>
                  </tr>
                  <tr class="warning">
                    <td>3</td>
                    <td>VOLVO</td>
                    <td>FH 12.420</td>
                    <td>ВН2222ВЕ</td>
                    <td>20.04.2016</td>
                    <td>Нет</td>
                    <td>555000</td>
                    <td>MP XHPExtra10w40</td>
                    <td>Проверка смазки</td>
                    <td>80000</td>
                    <td>01.06.2016</td>
                  </tr>
                  <tr class="info">
                    <td>4</td>
                    <td>VOLVO</td>
                    <td>FH 13.440</td>
                    <td>ВН3333ВЕ</td>
                    <td>01.05.2016</td>
                    <td>Нет</td>
                    <td>230000</td>
                    <td>MP XHPExtra10w40</td>
                    <td>Проверка уровня масел и прочих жидкостей</td>
                    <td>80000</td>
                    <td>15.06.2016</td>
                  </tr>
                </tbody>
              </table>
            <p>
              <button class="btn" type="button">Отправить на Email</button>
              <button class="btn" type="button">Печать</button>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection