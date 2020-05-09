PROGRAM TestParameter(INPUT, OUTPUT);
USES DOS;
FUNCTION GetQueryStringParameter(Parameter: STRING): STRING;
VAR
  PValue, Query: STRING;
  Counter, PPos, Check: INTEGER;
BEGIN
  Query := GetEnv('QUERY_STRING');
  PValue := '';
  Check := POS(Parameter, Query);
  IF (Check - 1 > 0) AND (Query[Check - 1] <> '&')
  THEN
    Check := POS('&' + Parameter, Query) + 1;
  IF Check > 0
  THEN
    BEGIN
      PPos := Check + LENGTH(Parameter) + 1; //пропуск самого индекса параметра и равно
      Counter := PPos;
      WHILE Counter <> (LENGTH(Query) + 1)
      DO
        BEGIN
          IF Query[Counter] <> '&'
          THEN
            PValue := PValue + Query[Counter]
          ELSE
            Counter := LENGTH(Query);
          Counter := Counter + 1
        END;
      GetQueryStringParameter := PValue
    END
  ELSE
    GetQueryStringParameter := 'no data'
END;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END.