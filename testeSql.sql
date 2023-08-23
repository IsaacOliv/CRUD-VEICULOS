SELECT 
a.id,
a.nome,
AVG(nota) AS media 
FROM  
alunos a 
inner join notas on a.id = aluno_id
GROUP BY a.id	
order by media desc;