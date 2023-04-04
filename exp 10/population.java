/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package exp10;

/**
 *
 * @author NIKITHA
 */
public class pop{

    public String name;
    public String capital;
    public String currency;
    public int population;
    public pop(String name,String capital,String currency,int population){
        this.name=name;
        this.capital=capital;
        this.currency=currency;
        this.population=population;
    }
    public String getName(){
        return name;
    }
    public String getcapital(){
        return capital;
    }
    public String getcurrency(){
        return currency;
    }
    public int getpopulation(){
        return population;
    }
    public void setName(String name){
        this.name=name;
    }
    public void setcapital(String capital){
        this.capital=capital;
    }
    public void setcurrency(String currency){
        this.currency=currency;
    }
     
    public void setpopulation(int population){
        this.population=population;
    }
}   
