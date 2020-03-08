

# LeetCode Personal Solutions

[TOC]

## How to solve problem

- [x] corner case
  - [ ] 输入为空：数组为`[]`，对象为`null`
  - [ ] 

 

## Binary Tree

- [ ] 

| Problem                                            | Note                                           |
| -------------------------------------------------- | ---------------------------------------------- |
| [337. House Robber III](/Note/337.md)              | 【DFS】二叉树约束求最大和                      |
| [96. Unique Binary Search Trees](/Note/96.md)      | 【递归】构造不同二叉树 -> 【DP】转换为线性问题 |
| [1367. Linked List in Binary Tree](/Note/1367.png) | 【DFS】判断一个List是否是二叉树的一部分        |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |
|                                                    |                                                |

## DP

| Problem                                                      | Note         |
| ------------------------------------------------------------ | ------------ |
| [309. Best Time to Buy and Sell Stock with Cooldown](/Note/309.md) | 【买卖股票】 |
|                                                              |              |
|                                                              |              |

## List

| Problem | Note |
| ------- | ---- |
|         |      |
|         |      |
|         |      |



## String

| Problem                        | Note                                     |
| ------------------------------ | ---------------------------------------- |
| [394. Decode String](/394.png) | 【递归】将string中的`[]`翻译成重复字符串 |
|                                |                                          |
|                                |                                          |
|                                |                                          |

## Special Data Structure

| Problem                                           | Note                                          |
| ------------------------------------------------- | --------------------------------------------- |
| [128. Longest Consecutive Sequence](/Note/128.md) | 【哈希表】HashSet的add/delete/contains = O(1) |
| [76. Minimum Window Substring](/Note/76.md)       | 【★滑动窗口】                                 |
| [32. Longest Valid Parentheses](/Note/32.md)      | 【★栈】找到最长的匹配括号子串                 |
|                                                   |                                               |

## DFS

| Problem                        | Note |
| ------------------------------ | ---- |
| [79. Word Search](/Note/79.md) |      |
|                                |      |
|                                |      |
|                                |      |

## Special Function

| Function      | trick          |
| ------------- | -------------- |
| Arrays.sort() | 自定义数组排序 |
|               |                |
|               |                |

```java
class Node{
  char ch;
  int[] count;
  public Node(char ch){
    this.ch = ch;
    count = new int[26];
  }
}
//通过重写compare方法
//1. o1-o2升序 o2-o1降序
Arrays.sort(nodes,new Comparator<Node>(){
  @Override
  public int compare(Node o1,Node o2){
    for(int i=0; i < 26; i++){
      if(o1.count[i] != o2.count[i])
        return o2.count[i] - o1.count[i];
    }
    return o1.count[0] - o2.count[0];
  }
});
```











