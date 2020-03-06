package _76;

import java.util.HashMap;
import java.util.Hashtable;
import java.util.Map;

class Solution {
    public String minWindow(String s, String t) {
        //1. initial
        HashMap<Character,Integer> map = new HashMap<>();
        for(int i=0; i < t.length(); i++){
            map.put(t.charAt(i),-1);
        }
        //2. find minimum
        int min=-1,max=-1;
        int mem = Integer.MAX_VALUE;
        boolean is_unique = true;
        for(int i=0; i < s.length();i++){
            Character c = s.charAt(i);
            if(map.containsKey(c)){
                map.put(c,i);
                min = findPeak(true,map);
                max = findPeak(false,map);
                if(min!=-1 && max-min+1 == mem)
                    is_unique = false;
                if(min!=-1 && max-min+1 < mem) {
                    is_unique = true;
                    mem = max - min + 1;
                }
            }
        }

        //3. return result
        if(min == -1 || !is_unique)
            return "";
        return s.substring(min,max+1);
    }

    public int findPeak(boolean isMin,HashMap<Character,Integer> map){
        int peak;
        if(isMin) {
            peak = Integer.MAX_VALUE;
            for (Map.Entry<Character, Integer> entry : map.entrySet()) {
                if(entry.getValue() < peak) peak = entry.getValue();
            }
        }else{
            peak = Integer.MIN_VALUE;
            for (Map.Entry<Character, Integer> entry : map.entrySet()) {
                if(entry.getValue() > peak) peak = entry.getValue();
            }
        }
        return peak;
    }
}
