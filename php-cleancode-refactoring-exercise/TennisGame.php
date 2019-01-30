<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */

class TennisGame
{
    public $score = '';
    public $player1Score;
    public $player2Score;
    const LOVE = 0;
    const FIFTEEN = 1;
    const THIRTY = 2;
    const FOURTY = 3;

    /**
     * @return mixed
     */
    public function getPlayer1Score()
    {
        return $this->player1Score;
    }

    /**
     * @return mixed
     */
    public function getPlayer2Score()
    {
        return $this->player2Score;
    }

    /**
     * @param mixed $player1Score
     */
    public function setPlayer1Score($player1Score)
    {
        $this->player1Score = $player1Score;
    }

    /**
     * @param mixed $player2Score
     */
    public function setPlayer2Score($player2Score)
    {
        $this->player2Score = $player2Score;
    }
    public function getDeuce($scoreDeuce)
    {
        switch ($scoreDeuce){
            case self::LOVE:
                $this->score = "Love-All";
                break;
            case self::FIFTEEN:
                $this->score = "Fifteen-All";
                break;
            case self::THIRTY:
                $this->score = "Thirty-All";
                break;
            case self::FOURTY:
                $this->score = "Fourty-All";
                break;
            default:
                $this->score = "Deuce";
        }
    }

    public function getWin($player1Score,$player2Score)
    {
        $minusResult = $player1Score-$player2Score;
            if ($minusResult==1) $this->score ="Advantage player1";
            else if ($minusResult ==-1) $this->score ="Advantage player2";
            else if ($minusResult>=2) $this->score = "Win for player1";
            else $this->score ="Win for player2";
    }
    public function getScore($player1Score,$player2Score)
    {
        switch ($player1Score) {
            case self::LOVE:
                $this->score .= "Love" . "-";
                break;
            case self::FIFTEEN:
                $this->score .= "Fifteen" . "-";
                break;
            case self::THIRTY:
                $this->score .= "Thirty" . "-";
                break;
            case self::FOURTY:
                $this->score .= "Fourty" . "-";
                break;
        }
        switch ($player2Score){
            case self::LOVE:
                $this->score .= "Love";
                break;
            case self::FIFTEEN:
                $this->score .= "Fifteen";
                break;
            case self::THIRTY:
                $this->score .= "Thirty";
                break;
            case self::FOURTY:
                $this->score .= "Fourty";
                break;
        }
    }

//    public function getScore($player1Name, $player2Name, $m_score1, $m_score2)
//    {
//        $tempScore=0;
//
//        if ($m_score1==$m_score2) {
//            switch ($m_score1)
//            {
//                case 0:
//                    $this->score = "Love-All";
//                    break;
//                case 1:
//                    $this->score = "Fifteen-All";
//                    break;
//                case 2:
//                    $this->score = "Thirty-All";
//                    break;
//                case 3:
//                    $this->score = "Forty-All";
//                    break;
//                default:
//                    $this->score = "Deuce";
//                    break;
//
//            }
//        }
//        else if ($m_score1>=4 || $m_score2>=4)
//        {
//            $minusResult = $m_score1-$m_score2;
//            if ($minusResult==1) $this->score ="Advantage player1";
//            else if ($minusResult ==-1) $this->score ="Advantage player2";
//            else if ($minusResult>=2) $this->score = "Win for player1";
//            else $this->score ="Win for player2";
//        }
//        else
//        {
//            for ($i=1; $i<3; $i++)
//            {
//                if ($i==1) $tempScore = $m_score1;
//                else { $this->score.="-"; $tempScore = $m_score2;}
//                switch($tempScore)
//                {
//                    case 0:
//                        $this->score.="Love";
//                        break;
//                    case 1:
//                        $this->score.="Fifteen";
//                        break;
//                    case 2:
//                        $this->score.="Thirty";
//                        break;
//                    case 3:
//                        $this->score.="Forty";
//                        break;
//                }
//            }
//        }
//    }

    public function __toString()
    {
        return $this->score;
    }
}