package _76;

/**
 *  EXPAND-不断扩充窗口过
 *  SHRINK-如果在s中遇到t的字符，才缩小窗口
 *            window
 *        j           i
 * .......[...........]...........
 */
class Solution2 {
    public String minWindow(String s, String t) {
        if(s == null || s.length() == 0 || s.length() < t.length()) //handle edge case
            return "";
        int[] bank = new int[256]; //store the number of char
        int requirement = t.length();
        int min_start = 0, min_end = Integer.MAX_VALUE;
        for(int i=0; i < t.length();i++) //initialize the bank
            bank[t.charAt(i)]++;
        for(int j=0,i=0; i < s.length(); i++){
            if(--bank[s.charAt(i)] >= 0) requirement--; //if the current char is in t
            while(requirement == 0){
                if(min_end-min_start > i-j){
                    min_end = i;
                    min_start = j;
                }
                if(++bank[s.charAt(j++)] > 0) requirement++; //j++ while encounter character in t,shrink the window
            }
        }

        return min_end == Integer.MAX_VALUE ? "" : s.substring(min_start,min_end+1);
    }
}
