<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Task.php";

    $server = 'mysql:host=localhost:8889;dbname=to_do_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class TaskTest extends PHPUnit_Framework_TestCase
    {

        function testSave()
        {
            // Arrange
            $description = "Wash the dog";
            $test_task = new Task($description);

            // Act
            $executed = $test_task->save();

            // Assert
            $this->assertTrue($executed, "Task not successfully saved to database");
        }

        // function testGetAll()
        // {
        //     // Arrange
        //     $description = "Wash the dog";
        //     $description_2 = "Water the lawn";
        //     $test_task = new Task($description);
        //     $test_task->save();
        //     $test_task_2 = new Task($description_2);
        //     $test_task_2->save();
        //
        //     // Act
        //     $result = Task::getAll();
        //
        //     // Assert
        //     $this->assertEquals([$test_task, $test_task_2], $result);
        // }
    }

?>
