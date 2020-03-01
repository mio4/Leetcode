package _128;

import java.util.HashSet;

class Solution {
    public static int longestConsecutive(int[] nums) {
        int maxLen = 0;
        HashSet<Integer> set = new HashSet<>();
        for(int i=0; i < nums.length; i++)
            set.add(nums[i]);
        for(int i=0; i < nums.length; i++){
            int num = nums[i];
            int len = 0;
            int left = num,right = num;
            //trick : remove sequence number from hashSet to simplify
            while(set.contains(--left)) {
                len++;
                set.remove(left);
            }
            while(set.contains(++right)) {
                len++;
                set.remove(right);
            }
            maxLen = Math.max(maxLen,len+1);
        }
        return maxLen;
    }

    public static void main(String[] args) {
        int[] nums = {1,2,3,4,100,200};
        System.out.println(longestConsecutive(nums));
    }
}
