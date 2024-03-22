<h2>Подсчёт количество абонентов по подразделениям</h2>
<div>
    <label>Подразделение 
                <select>
                        <option>Отдел</option>
                        <option>Управление</option>
                        <option>Участок</option>
                </select>
        </label>
    <label>Номера абонента:
    <?php
        $query = "SELECT COUNT(*) FROM users";
    ?>
</div>


<h2>Подсчёт количество абонентов по помещениям</h2>
<div>
    <label>Помещения
                <select>
                        <option>Отдел</option>
                        <option>Управление</option>
                        <option>Участок</option>
                </select>
        </label>
    <label>Номера абонента:
    <?php
        $query = "SELECT COUNT(*) FROM users";
    ?>
</div>