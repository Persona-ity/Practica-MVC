<h1>Все номера абонента</h1>
<label>Абоненты
                <select>
                     <option>ФИО-1</option>
                     <option>ФИО-2</option>
                     <option>ФИО-3</option>
                </select>
</label>

<label>Номера абонента:
    <ol>
            <?php
        foreach ($posts as $post) {
            echo '<li>' . $post->title . '</li>';
        }
    ?>
    </ol>
</label>
   