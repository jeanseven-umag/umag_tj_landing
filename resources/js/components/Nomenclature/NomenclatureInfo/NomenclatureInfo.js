import { Flex, Grid, Text } from "@mantine/core";

export const NomenclatureInfo = ({ readTime, title, description }) => {
  return (
    <div className="bg-light">
      <div className="knowledge-container">
        <Grid className="nomenclature-info-block">
          <Grid.Col sm={4} xs={12}>
            <Flex direction="column">
              <Text mb={10} className="nomenclature-caption">
                {title}
              </Text>
              <Text className="nomenclature-subCaption">
                Вақти хондан: ~{readTime || 15} дақиқа
              </Text>
            </Flex>
          </Grid.Col>
          <Grid.Col sm={8} xs={12}>
            <Text my={10} className="nomenclature-info-text">
              <div dangerouslySetInnerHTML={{ __html: description }} />
            </Text>
          </Grid.Col>
        </Grid>
      </div>
    </div>
  );
};
