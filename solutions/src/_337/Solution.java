package _337;

import node.TreeNode;

public class Solution {
    public int rob(TreeNode root) {
        int[] rootRes = robHouse(root);
        int result = (rootRes[0] > rootRes[1]) ? rootRes[0] : rootRes[1];
        return result;
    }

    //res[0] -> total amount of money if we rob current root house
    //res[1] -> total amount of money if we DON'T rob current root house
    private int[] robHouse(TreeNode root){
        //1. end recursion
        if(root == null)
            return new int[2];
        if(root.left == null && root.right == null)
            return new int[]{root.val,0};

        //2. define future result
        int[] rubLeftHouse = robHouse(root.left);
        int[] rubRightHouse = robHouse(root.right);

        //3. detail compare
        //3.1 if rob current house, we can't rub left&right house
        int robCurrentHouse = root.val + rubLeftHouse[1] + rubRightHouse[1];
        //3.2 if DON'T rob current house
        int robBothHouse = rubLeftHouse[0] + rubRightHouse[0];
        int robLeftHouse = rubLeftHouse[0] + rubRightHouse[1];
        int robRightHouse = rubLeftHouse[1] + rubRightHouse[0];
        int leaveBothHouse = rubLeftHouse[1] + rubRightHouse[1];
        int LeaveCurrentHouse = Math.max(Math.max(robBothHouse,leaveBothHouse),
                Math.max(robLeftHouse,robRightHouse));

        return new int[]{robCurrentHouse,LeaveCurrentHouse};
    }
}
