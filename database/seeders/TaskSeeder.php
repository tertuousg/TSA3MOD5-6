<?php
namespace Database\Seeders;
use App\Models\Task;
use Illuminate\Database\Seeder;
class TaskSeeder extends Seeder {
 public function run(): void {
 $today=today();
 $rows=[
 ['Complete Laravel Migration','completed',0],['Study Eloquent Models','pending',0],['Create Task Management Interface','pending',0],
 ['Review Previous Lessons','completed',-1],['Practice PHP Fundamentals','completed',-1],
 ['Read Laravel Documentation','pending',1],['Prepare Project Presentation','pending',1],['Submit Technical Assessment','pending',2]
 ];
 foreach($rows as [$title,$status,$offset]) {Task::create(['title'=>$title,'status'=>$status,'task_date'=>$today->copy()->addDays($offset)->toDateString()]);}
 }
}
