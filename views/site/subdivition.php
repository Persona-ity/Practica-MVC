<h1>Выбор номеров абонентов по подразделениям</h1>
<label>Подразделение 
              <select>
                     <option>Отдел</option>
                     <option>Управление</option>
                     <option>Участок</option>
              </select>
       </label>

<label>Номер-абонент
    <ol>
            <?php
        foreach ($posts as $post) {
            echo '<li>' . $post->title . '</li>';
        }
    ?>
    </ol>
</label>
   

