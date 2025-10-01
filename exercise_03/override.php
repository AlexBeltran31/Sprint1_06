<?php
class Employee {
    private string $name;
    private int $salary;

    public function __construct(string $name, int $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function __toString() {
        return "The employee " . $this->name . " earns " . $this->salary . "$ a month.";
    }
}
$employee1 = new Employee("Camila", 8000);
echo $employee1;