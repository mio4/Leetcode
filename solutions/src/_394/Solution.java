package _394;

public class Solution {
    private static int index = 0;
    public static String decodeString(String s) {
        return helper(s);
    }

    public static String helper(String origin){
        String s = "";
        while(true){
            //1. complete convert the whole string
            if(index == origin.length())
                return s;
            //2. end a repeat
            char c = origin.charAt(index);
            if(c == ']')
                return s;
            //3. normal number and character
            if(isNum(c)){
                int begin = index;
                while(isNum(c)){
                    index++;
                    c = origin.charAt(index);
                }
                int end = index;
                int cnt = str2Num(origin,begin,end);
                index++;
                String term = helper(origin);
                for(int i=0; i < cnt; i++){
                    s += term;
                }
            }
            else if(isChar(c)){
                s += c;
            }
            index++;
        }
    }

    private static Boolean isNum(char c){
        return (c >= '0' && c <= '9');
    }

    private static Boolean isChar(char c){
        return ((c>='a' && c <= 'z') || (c>='A' && c <='Z'));
    }

    private static int str2Num(String s,int begin, int end){
        String t = s.substring(begin,end);
        return new Integer(t);
    }

    public static void main(String[] args) {
        String s = "100[leetcode]";
        System.out.println(decodeString(s));
    }
}