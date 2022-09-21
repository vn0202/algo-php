<?php
namespace vendor;
class QuestionsList{
    private  $listsQuestion = [];
    public  function __construct($listsQuestion = [])
    {
        $this->listsQuestion = $listsQuestion;
    }
    public  function parse($path)
    {
        $contents = file_get_contents($path);
        $arrayQuestions = explode("######",$contents);
        array_shift($arrayQuestions);
        foreach ($arrayQuestions as $questions)
        {
              [$question,$anser]  = explode("####",$questions);
               $this->listsQuestion[] = new Question($question,$anser);

        }
        return $this;
    }
    public  function isEmpty()
    {
        return count($this->listsQuestion) == 0 ? true : fasle;
    }
    public function getAll()
    {
        if(count($this->listsQuestion) <=0)
        {
            throw new \Exception("ListQuestion is empty");
        }
     return $this->listsQuestion;
    }
    public  function insertQuestion(Question  $question)
    {
        array_push($this->listsQuestion,$question);
        return $this;
    }

   public  function getQuestion($numberQuestion)
   {
       if($this->isEmpty())
       {
          throw new \Exception("List question is empty");
       }
      if($numberQuestion < 0 || $numberQuestion >= count($this->listsQuestion))
      {
          throw  new \Exception("The question is no exist");
      }
    return $this->listsQuestion[$numberQuestion - 1];
   }
}
