package _1366;

import java.util.Arrays;
import java.util.Comparator;

class Node{
    char ch;
    int[] count;
    public Node(char ch){
        this.ch = ch;
        count = new int[26];
    }
}
public class Solution3 {
    public static String rankTeams(String[] votes){
        //1. initialize
        Node[] nodes = new Node[26];
        for(int i=0; i < 26; i++){
            Node node = new Node((char)('A'+i));
            nodes[i] = node;
        }
        for(String vote : votes){
            for(int i=0; i < votes[0].length(); i++){
                nodes[vote.charAt(i) - 'A'].count[i] += 1;
            }
        }
        //2. sort
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
        //3. return
        StringBuilder sb = new StringBuilder();
        for(int i=0; i < votes[0].length();i++){
            sb.append(nodes[i].ch);
        }
        return sb.toString();
    }
    public static void main(String[] args) {
        String[] s =  {"FVSHJIEMNGYPTQOURLWCZKAX","AITFQORCEHPVJMXGKSLNZWUY","OTERVXFZUMHNIYSCQAWGPKJL","VMSERIJYLZNWCPQTOKFUHAXG","VNHOZWKQCEFYPSGLAMXJIUTR","ANPHQIJMXCWOSKTYGULFVERZ","RFYUXJEWCKQOMGATHZVILNSP","SCPYUMQJTVEXKRNLIOWGHAFZ","VIKTSJCEYQGLOMPZWAHFXURN","SVJICLXKHQZTFWNPYRGMEUAO","JRCTHYKIGSXPOZLUQAVNEWFM","NGMSWJITREHFZVQCUKXYAPOL","WUXJOQKGNSYLHEZAFIPMRCVT","PKYQIOLXFCRGHZNAMJVUTWES","FERSGNMJVZXWAYLIKCPUQHTO","HPLRIUQMTSGYJVAXWNOCZEKF","JUVWPTEGCOFYSKXNRMHQALIZ","MWPIAZCNSLEYRTHFKQXUOVGJ","EZXLUNFVCMORSIWKTYHJAQPG","HRQNLTKJFIEGMCSXAZPYOVUW","LOHXVYGWRIJMCPSQENUAKTZF","XKUTWPRGHOAQFLVYMJSNEIZC","WTCRQMVKPHOSLGAXZUEFYNJI"};
        System.out.println(rankTeams(s));
    }
}
