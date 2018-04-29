class Solution {
    public int findMaxConsecutiveOnes(int[] nums) {
        ArrayList<Integer> maxList = new ArrayList<Integer>();
        int len = nums.length;
        int max = 0;
        for(int i=0;i<len;i++){
            if(nums[i]==0){
                maxList.add(max);
                max = 0;
            }
            else if(nums[i]==1) {
                max++;
                if(i == len-1) maxList.add(max);
            }
        }
        max = 0;
        for(int i=0;i < maxList.size();i++){
            if(maxList.get(i) >= max) max = maxList.get(i);
        }
        
        return max;
    }
}